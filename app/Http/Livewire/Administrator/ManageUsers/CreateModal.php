<?php

namespace App\Http\Livewire\Administrator\ManageUsers;

use App\Models\Course;
use App\Models\College;
use Livewire\Component;

class CreateModal extends Component
{
    public $createModal = false;

    public $role_id;
    public $course_id;
    public $name;
    public $id_number;
    public $email;

    public $selectedCollege = null;
    public $courses = null;

    public function updatedSelectedCollege($college_id)
    {
        $this->courses = Course::where('college_id', $college_id)->get();
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public function render()
    {
        return view('livewire.administrator.manage-users.create-modal', [
            'colleges' => College::all(),
        ]);
    }
}
