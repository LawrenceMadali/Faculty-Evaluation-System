<?php

namespace App\Http\Livewire\Administrator\EvaluationPage;

use App\Models\Spe;
use App\Models\User;
use App\Models\SpeUser;
use Livewire\Component;
use App\Models\Semester;
use App\Models\CourseName;
use App\Models\SchoolYear;
use App\Models\SubjectCode;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\YearAndSection;

class SetPeerEvaluationPage extends Component
{
    use WithPagination;

    public $openModal = false;
    public $viewModal = false;

    public function closeModal()
    {
        $this->openModal = false;
        $this->viewModal = false;
        $this->reset();
        $this->resetValidation();
    }



    public $course       = null;
    public $subject_code = null;
    public $subjectCodes = null;

    public $instructor = null;
    public $yearAndSection = null;

    public function updatedCourse($course_name_id)
    {
        $this->subjectCodes = SubjectCode::where('course_name_id', $course_name_id)->get();
    }

    public function updatedInstructor($user_id)
    {
        $this->yearAndSection = YearAndSection::where('user_id', $user_id)->get();
    }

    // Select all or select 100%
    public $selectedStudents = [];
    public $select100 = false;

    public function updatedSelect100($value)
    {
        if ($value) {
            $this->selectedStudents = User::where('role_id', 4)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 80%
    public $select80 = false;

    public function updatedSelect80($value)
    {
        $studentCount = User::where('role_id', 4)->count();
        $percentage = .80 * $studentCount;
        if ($value) {
            $this->selectedStudents = User::where('role_id', 4)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 60%
    public $select60 = false;

    public function updatedSelect60($value)
    {
        $studentCount = User::where('role_id', 4)->count();
        $percentage = .60 * $studentCount;

        if ($value) {
            $this->selectedStudents = User::where('role_id', 4)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 40%
    public $select40 = false;

    public function updatedSelect40($value)
    {
        $studentCount = User::where('role_id', 4)->count();
        $percentage = .40 * $studentCount;

        if ($value) {
            $this->selectedStudents = User::where('role_id', 4)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 20%
    public $select20 = false;

    public function updatedSelect20($value)
    {
        $studentCount = User::where('role_id', 4)->count();
        $percentage = .20 * $studentCount;

        if ($value) {
            $this->selectedStudents = User::where('role_id', 4)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
    }
    // Select all or select 10%
    public $select10 = false;

    public function updatedSelect10($value)
    {

        if ($value) {
            $studentCount = User::where('role_id', 4)->count();
            $percentage = $studentCount * .10;

            $this->selectedStudents = User::where('role_id', 4)->inRandomOrder()
            ->take($percentage)
            ->pluck('id');
            // ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
    }



    public function updatedSelectedStudents()
    {
        $this->select100 = false;
        $this->select80 = false;
        $this->select60 = false;
        $this->select40 = false;
        $this->select20 = false;
        $this->select10 = false;
    }

    public $school_year;
    public $semester;
    public $year_and_section;
    // public $subject_code;
    // public $instructor;
    // public $course;

    public function create()
    {
        $validateEvaluation = $this->validate([
            'school_year' => 'required',
            'semester' => 'required',
            'instructor' => 'required',
            'course' => 'required',
            'subject_code' => 'required',
            'year_and_section' => 'required',
            'selectedStudents' => 'required',
        ],[
            'selectedStudents.required' => 'This student number checkbox field is required.'
        ]);

        $evaluator = Spe::create([
            'school_year_id'    => $this->school_year,
            'semester_id'       => $this->semester,
            'user_id'           => $this->instructor,
            'course_name_id'    => $this->course,
            'subject_code_id'   => $this->subject_code,
            'year_and_section_id' => $this->year_and_section,
        ]);
        $this->emit('created');
        $evaluator->users()->sync($this->selectedStudents);
        $this->openModal = false;
        $this->school_year = "";
        $this->semester = "";
        $this->instructor = "";
        $this->course = "";
        $this->subject_code = "";
        $this->year_and_section = "";
        $this->reset('selectedStudents', 'select100', 'select80', 'select60', 'select40', 'select20', 'select10');

    }

    public function render()
    {
        return view('livewire.administrator.evaluation-page.set-peer-evaluation-page',[
            'instructors'   => User::where('role_id', 4)->get(),
            'studentCount'  => User::where('role_id', 4)->count(),
            'courses'       => CourseName::all(),
            'sems'          => Semester::all(),
            'yrSecs'        => YearAndSection::all(),
            'schoolYears'   => SchoolYear::all(),
            'scs'           => SubjectCode::all(),
            'studentEvaluator'=> Spe::with('users')->first(),
            'peerCounts'    => Spe::count(),
            'spes'          => Spe::with('schoolYears', 'instructors', 'semesters',
                                         'courses', 'yearSections', 'subjectCodes')
            ->latest('id')
            ->paginate(5),

            ]);
    }
}
