<?php

namespace App\Http\Livewire\Administrator\ManageUsers;

use App\Models\User;
use Livewire\Component;
use App\Models\Instructor;
use App\Models\SubjectCode;

class ManageInstructorInformations extends Component
{
    public $createModal = false;
    public $editModal = false;
    public $importModal = false;

    public $user_id;
    public $id_number;
    public $subject_code_id;
    public $is_regular = true;

    public function create()
    {
        $this->validate([
            'user_id' => 'required',
            'id_number' => 'required',
            'subject_code_id' => 'required',
        ]);

        Instructor::create([
            'user_id' => $this->user_id,
            'id_number' => $this->id_number,
            'subject_code_id' => $this->subject_code_id,
        ]);

        $this->reset();
        $this->resetValidation();
        $this->emit('created');
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
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
        return view('livewire.administrator.manage-users.manage-instructor-informations',[
            'instructors' => Instructor::with('users', 'subjectCodes')->get(),
            'users' => User::where('role_id', 4)->get(),
            'subjectCodes' => SubjectCode::all(),
        ]);
    }
}
