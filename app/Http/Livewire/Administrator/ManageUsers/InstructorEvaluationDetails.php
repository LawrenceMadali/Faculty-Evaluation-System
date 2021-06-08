<?php

namespace App\Http\Livewire\Administrator\ManageUsers;

use App\Models\User;
use Livewire\Component;
use App\Models\CourseCode;
use App\Models\Instructor;
use Livewire\WithPagination;
use App\Models\YearAndSection;
use App\Models\CourseCodeAndTitle;

class InstructorEvaluationDetails extends Component
{
    use WithPagination;
    public $createModal = false;
    public $manageModal = false;
    public $importModal = false;

    public $user_id;
    public $is_regular = true;

    public $instructors;
    public function mount()
    {
        $this->instructors = User::where('role_id', 4)->get();
    }

    public function submit()
    {
        $this->validate([
            'user_id' => 'required|unique:instructors',
        ]);

        Instructor::create([
            'user_id' => $this->user_id,
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
    // Manage Modal
    public $detailsID;
    public $course_code;
    public $year_and_section;

    public function OpenManageModal($id)
    {
        $this->detailsID = $id;
        $detailsID = Instructor::find($this->detailsID);
        $this->manageModal = true;
        $this->resetValidation();
    }

    public function create()
    {
        $validating = $this->validate([
            'course_code' => 'required',
            'year_and_section' => 'required',
        ]);

        CourseCode::create([
            'instructor_id' => $this->detailsID,
            'course_code' => $this->course_code
        ]);

        YearAndSection::create([
            'instructor_id' => $this->detailsID,
            'course_code_id' => $this->course_code,
            'year_and_section' => $this->course_code
        ]);
        $this->emit('created');
        $this->reset();
        $this->resetValidation();

    }

    public function closeModal()
    {
        $this->manageModal = false;
        $this->resetValidation();
    }


    public function render()
    {
        return view('livewire.administrator.manage-users.instructor-evaluation-details',[
            'users' => Instructor::with('users', 'CourseCodes')->paginate(5),
            'ccts' => CourseCodeAndTitle::all(),
            'CourseCodes' => CourseCode::all(),
        ]);
    }
}
