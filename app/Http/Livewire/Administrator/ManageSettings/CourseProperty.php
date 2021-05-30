<?php

namespace App\Http\Livewire\Administrator\ManageSettings;




use App\Models\Course;
use App\Models\College;
use Livewire\Component;
use Livewire\WithPagination;

class CourseProperty extends Component
{
    use WithPagination;

    public $name;
    public $college_id;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'name' => 'required|unique:courses',
        'college_id' => 'required',
    ];

    protected $messages = [
        'college_id.required' => 'The college field is required.'
    ];

    public function create()
    {
        $validated = $this->validate();

        Course::create($validated);
        $this->reset();
        $this->resetValidation();
        $this->emit('added');
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public $courseId;

    public function editOpenModal($id)
    {
        $this->courseId = $id;
        $courseId           = Course::find($this->courseId);
        $this->name         = $courseId->name;
        $this->college_id   = $courseId->college_id;
        $this->resetValidation();

        $this->editModal = true;
    }


    public function update()
    {
        $validated = $this->validate([
            'name'      => 'required',
            'college_id'=> 'required'
        ]);
        Course::find($this->courseId)->update($validated);
        $this->reset();
        $this->resetValidation();
        $this->emit('updated');
    }

    public function closeModal()
    {
        $this->createModal = false;
        $this->editModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.course-property',[
            'courses' => Course::with('colleges')->paginate(5),
            'colleges' => College::all(),
        ]);
    }
}
