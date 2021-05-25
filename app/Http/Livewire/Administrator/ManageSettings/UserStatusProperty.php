<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use Livewire\Component;
use App\Models\UserStatus;
use Livewire\WithPagination;

class UserStatusProperty extends Component
{
    use WithPagination;

    public $name;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'name' => 'required|unique:student_statuses',
    ];

    public function create()
    {
        $status = $this->validate([
            'name' => 'required'
        ]);

        UserStatus::create($status);
        $this->reset();
        $this->emit('added');
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public $statusId;

    public function editOpenModal($id)
    {
        $this->statusId = $id;
        $statusId = UserStatus::find($this->statusId);
        $this->name = $statusId->name;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $status = $this->validate([
            'name' => 'required'
            ]);
            UserStatus::find($this->statusId)->update($status);
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
        return view('livewire.administrator.manage-settings.user-status-property', [
            'statuses' => UserStatus::paginate(5),
        ]);
    }
}
