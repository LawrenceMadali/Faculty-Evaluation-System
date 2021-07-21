<?php

namespace App\Http\Livewire\Administrator\ManageUsers;

use App\Models\User;
use App\Models\College;
use Livewire\Component;
use App\Models\CourseCode;
use App\Models\Instructor;
use Livewire\WithPagination;

class InstructorEvaluationDetails extends Component
{
    use WithPagination;

    public $editModal = false;
    public $importModal = false;

    public $user_id;
    public $college_id;
    public $is_regular = true;
    public $id_number;
    public $name;

    public $instructor;

    public function updatedInstructor()
    {
        $instructor = User::find($this->instructor);
        $this->name     = $instructor->name ?? null;
        $this->id_number = $instructor->id_number ?? null;
        $this->college_id = $instructor->college_id ?? null;

    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|unique:instructors,name',
        ]);

        Instructor::updateOrCreate([
            'name' => $this->name,
            'id_number' => $this->id_number,
            'college_id' => $this->college_id,
        ]);
        $this->reset();
        $this->resetValidation();
        $this->emit('added');
    }

    public $instructorId;
    public $user;
    public function openEditModal($id)
    {
        $this->instructorId = $id;
        $instructorId = Instructor::find($this->instructorId);
        $this->is_regular = $instructorId->is_regular;
        $this->resetValidation();
        $this->editModal = true;
        $this->user = $instructorId;
    }

    public function update()
    {
        Instructor::find($this->instructorId)->update([
        'is_regular' => $this->is_regular
        ]);
        $this->reset();
        $this->resetValidation();
        $this->emit('updated');
    }

    public function closeModal()
    {
        $this->editModal = false;
        $this->reset();
        $this->resetValidation();
    }


    public function render()
    {
        return view('livewire.administrator.manage-users.instructor-evaluation-details',[
            'users' => Instructor::with('CourseCodes', 'colleges')->paginate(5),
            'instructors' => User::where('role_id', 4)->get(),
            'colleges' => College::all(),
            'CourseCodes' => CourseCode::all(),
        ]);
    }
}
