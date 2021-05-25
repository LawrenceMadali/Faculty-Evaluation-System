<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\College;
use Livewire\Component;
use Livewire\WithPagination;

class CollegeProperty extends Component
{

    use WithPagination;

    public $name;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'name' => 'required|unique:colleges',
    ];

    public function create()
    {
        $college = $this->validate([
            'name' => 'required'
        ]);

        College::create($college);
        $this->reset();
        $this->emit('added');
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public $collegeId;

    public function editOpenModal($id)
    {
        $this->collegeId = $id;
        $collegeId = College::find($this->collegeId);
        $this->name = $collegeId->name;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $college = $this->validate([
            'name' => 'required'
            ]);
            College::find($this->collegeId)->update($college);
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
        return view('livewire.administrator.manage-settings.college-property',[
            'colleges' => College::paginate(5),
        ]);
    }
}
