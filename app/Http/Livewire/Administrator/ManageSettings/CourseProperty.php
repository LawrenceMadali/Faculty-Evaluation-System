<?php

namespace App\Http\Livewire\Administrator\ManageSettings;




use Livewire\Component;
use App\Models\CourseName;
use Livewire\WithPagination;

class CourseProperty extends Component
{
    use WithPagination;

    public $course;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'course' => 'required|unique:course_names',
    ];

    public function create()
    {
        $this->validate();

        CourseName::create([
            'course' => $this->course,
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
        $this->course = $crs->course;
        $this->resetValidation();

        $this->editModal = true;
    }


    public function update()
    {
        $course = $this->validate([
            'course' => 'required'
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
        $this->deleteModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public $deleteModal = false;

    public function deleteOpenModal($id)
    {
        $this->crs = $id;
        $this->deleteModal = true;
    }

    public function delete()
    {
        CourseName::destroy($this->crs);
        $this->reset();
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.course-property',[
            'courses' => CourseName::latest('id')->paginate(5),
        ]);
    }
}
