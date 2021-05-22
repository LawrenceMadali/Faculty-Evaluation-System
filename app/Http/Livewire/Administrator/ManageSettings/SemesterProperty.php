<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use Livewire\Component;
use App\Models\Semester;
use Livewire\WithPagination;

class SemesterProperty extends Component
{
    use WithPagination;

    public $semester;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'semester' => 'required|unique:semesters'
    ];

    public function create()
    {
        $this->validate();

        Semester::create([
            'semester' => $this->semester
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

    public $sem;

    public function editOpenModal($id)
    {
        $this->sem = $id;
        $sem = Semester::find($this->sem);
        $this->semester = $sem->semester;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $semester = $this->validate([
            'semester' => 'required'
        ]);
        Semester::find($this->sem)->update($semester);
        $this->reset();
        $this->resetValidation();
        $this->emit('updated');
    }

    public function closeModal()
    {
        $this->editModal = false;
        $this->createModal = false;
        $this->deleteModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public $deleteModal = false;

    public function deleteOpenModal($id)
    {
        $this->sem = $id;
        $this->deleteModal = true;
    }

    public function delete()
    {
        Semester::destroy($this->sem);
        $this->reset();
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.semester-property',[
            'sems' => Semester::latest('id')->paginate(5)
        ]);
    }
}
