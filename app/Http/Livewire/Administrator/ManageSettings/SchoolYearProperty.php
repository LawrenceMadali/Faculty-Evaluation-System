<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use Livewire\Component;
use App\Models\SchoolYear;
use Livewire\WithPagination;

class SchoolYearProperty extends Component
{
    use WithPagination;

    public $name;
    public $createModal = false;
    public $editModal = false;

    public function create()
    {
        $validated = $this->validate([
            'name' => 'required|min:4|unique:school_years',
        ],
        ['unique' => 'The :input is already exist.']);

        SchoolYear::create($validated);
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
        $this->name = $sy->name;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $schoolYear = $this->validate([
            'name' => 'required|min:4|unique:school_years,name,'.$this->syId,
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
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.school-year-property',[
            'sys' => SchoolYear::latest('id')->paginate(5),
        ]);
    }
}
