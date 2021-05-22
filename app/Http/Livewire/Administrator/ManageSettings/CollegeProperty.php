<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\College;
use Livewire\Component;
use Livewire\WithPagination;

class CollegeProperty extends Component
{

    use WithPagination;

    public $college;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'college' => 'required|unique:colleges',
    ];

    public function create()
    {
        $college = $this->validate([
            'college' => 'required'
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
        $this->college = $collegeId->college;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $college = $this->validate([
            'college' => 'required'
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
        $this->deleteModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public $deleteModal = false;

    public function deleteOpenModal($id)
    {
        $this->collegeId = $id;
        $this->deleteModal = true;
    }

    public function delete()
    {
        College::destroy($this->collegeId);
        $this->reset();
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.college-property',[
            'colleges' => College::latest('id')->paginate(5),
        ]);
    }
}
