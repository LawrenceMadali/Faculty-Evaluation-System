<?php

namespace App\Http\Livewire\Administrator\ManageUsers\ManageInstructor;

use App\Models\User;
use Livewire\Component;
use App\Models\Instructor;

class EvaluationDetails extends Component
{
    public $removeID;
    public function remove($id)
    {
        $this->removeID = $id;
        Instructor::find($this->removeID)->destroy($this->removeID);
    }

    public $user = null;
    public $instructors = null;

    public function updatedUser($user_id)
    {
        $this->instructors = Instructor::where('user_id', $user_id)->get();
    }

    public function render()
    {
        return view('livewire.administrator.manage-users.manage-instructor.evaluation-details',[
            'faculties' => Instructor::with('CourseCodes')->get(),
            'users' => User::where('role_id', 4)->get(),
        ]);
    }
}
