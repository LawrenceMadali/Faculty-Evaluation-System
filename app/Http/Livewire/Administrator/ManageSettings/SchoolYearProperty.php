<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use Livewire\Component;
use App\Models\SchoolYear;
use Livewire\WithPagination;

class SchoolYearProperty extends Component
{
    use WithPagination;

    public $school_year;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'school_year' => 'required|min:4|unique:school_years',
    ];

    public function create()
    {
        $this->validate();

        SchoolYear::create([
            'school_year' => $this->school_year,
        ]);
        $this->reset();
        $this->emit('added');
        $this->resetValidation();
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public $syId;

    public function editOpenModal($id)
    {
        $this->syId = $id;
        $sy = SchoolYear::find($this->syId);
        $this->school_year = $sy->school_year;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $schoolYear = $this->validate([
            'school_year' => 'required|min:4'
        ]);
        SchoolYear::find($this->syId)->update($schoolYear);
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
        $this->syId = $id;
        $this->deleteModal = true;
    }

    public function delete()
    {
        SchoolYear::destroy($this->syId);
        $this->reset();
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.school-year-property',[
            'sys' => SchoolYear::latest('id')->paginate(5),
        ]);
    }
}
