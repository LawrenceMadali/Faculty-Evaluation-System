<?php

namespace App\Http\Livewire\Administrator\ManageSettings;




use Livewire\Component;
use App\Models\CourseName;
use Livewire\WithPagination;

class CourseProperty extends Component
{
    use WithPagination;

    public $name;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'name' => 'required|unique:course_names',
    ];

    public function create()
    {
        $this->validate();

        CourseName::create([
            'name' => $this->name,
        ]);
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

    public $crs;

    public function editOpenModal($id)
    {
        $this->crs = $id;
        $crs = CourseName::find($this->crs);
        $this->name = $crs->name;
        $this->resetValidation();

        $this->editModal = true;
    }


    public function update()
    {
        $course = $this->validate([
            'name' => 'required'
            ]);
            CourseName::find($this->crs)->update($course);
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
            'courses' => CourseName::paginate(5),
        ]);
    }
}
