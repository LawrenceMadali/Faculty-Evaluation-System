<?php

namespace App\Http\Livewire\Administrator\EvaluationPage;

use App\Models\Sse;
use App\Models\User;
use App\Models\Course;
use App\Models\College;
use Livewire\Component;
use App\Models\Semester;
use App\Models\CourseCode;
use App\Models\Instructor;
use App\Models\SchoolYear;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\YearAndSection;
use Illuminate\Support\Facades\Auth;

class SetStudentEvaluationPage extends Component
{
    use WithPagination;

    public $openModal = false;
    public $editModal = false;
    public $user_id = null;
    public $evaluatee;

    public $user;
    // instructor
    public $instructors = null;
    public $instructor = null;
    public function updatedInstructor($instructor)
    {
        if ($instructor) {
            $this->courses = Course::where('instructor_id', $this->instructor)->get() ?? null;

            $this->resetSelect();
            $this->selectedStudents = [];
        } else {
            $this->courses = null;
            $this->yearAndSections = null;
            $this->students = null;
            $this->courseCodes = null;
        }
        $this->reset('course', 'yearAndSections', 'students', 'courseCode', 'courseCodes');

        $instructor = Instructor::find($this->instructor);
        $this->name = $instructor->name ?? null;
    }
    // course
    public $courses = null;
    public $course = null;
    public function updatedCourse($course, $instructor)
    {
        if ($course) {
            $this->yearAndSections = YearAndSection::where(
                [
                'instructor_id'=> $this->instructor,
                'course_id'     => $this->course,
                ])->get() ?? null;

                $this->resetSelect();
            } else {
                $this->yearAndSections = null;
                $this->students = null;
                $this->courseCodes = null;
            }
            $this->reset('yearAndSection', 'students');
    }
    // course code
    public $courseCodes = null;
    public $courseCode = null;
    // year and section
    public $yearAndSections = null;
    public $yearAndSection = null;
    public function updatedYearAndSection($yearAndSection)
    {
        if ($yearAndSection) {
            $this->students = User::where([
                'role_id' => 5,
                'year_and_section_id' => $this->yearAndSection,
                ])
                ->inRandomOrder()
                ->get() ?? null;

            $this->courseCodes = CourseCode::where([
                'course_id' => $this->course,
                'year_and_section_id' => $this->yearAndSection,
                'instructor_id' => $this->instructor,
                ])->get() ?? null;
                $this->resetSelect();
        } else {
            $this->students = null;
            $this->courseCodes = null;
        }
    }

    public function resetFields()
    {
        $this->reset([
        'selectedStudents', 'select100', 'select80', 'select60',
        'select40', 'select20', 'select10', 'school_year', 'semester',
        'instructor', 'courseCode', 'course', 'yearAndSection', 'students']);
    }

    public $students = null;

    public function openCreateModal()
    {
        $this->openModal = true;
        $this->resetFields();
        $this->resetValidation();
    }
    public function closeModal()
    {
        $this->openModal = false;
        $this->resetFields();
        $this->resetValidation();
    }

    // Select all or select 100%
    public $selectedStudents = [];
    public $select100 = false;

    public function updatedSelect100($value)
    {
        if ($value) {
            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();

            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 90%
    public $select90 = false;

    public function updatedSelect90($value)
    {
        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .90;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }
    // Select all or select 80%
    public $select80 = false;

    public function updatedSelect80($value)
    {
        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .80;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select90 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }
    // Select all or select 70%
    public $select70 = false;

    public function updatedSelect70($value)
    {
        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .70;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 60%
    public $select60 = false;

    public function updatedSelect60($value)
    {
        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .60;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 50%
    public $select50 = false;

    public function updatedSelect50($value)
    {
        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .50;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 40%
    public $select40 = false;

    public function updatedSelect40($value)
    {
        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .40;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select30 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 30%
    public $select30 = false;

    public function updatedSelect30($value)
    {
        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .30 ;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select20 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }

    // Select all or select 20%
    public $select20 = false;

    public function updatedSelect20($value)
    {
        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .20 ;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select10 = false;
        } else {
            $this->selectedStudents = [];
        }
    }
    // Select all or select 10%
    public $select10 = false;

    public function updatedSelect10($value)
    {

        if ($value) {
            $studentCount = User::where('year_and_section_id', $this->yearAndSection)->count();
            $percentage = $studentCount * .10;

            $this->selectedStudents = User::where('year_and_section_id', $this->yearAndSection)->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
            $this->select100 = false;
            $this->select90 = false;
            $this->select80 = false;
            $this->select70 = false;
            $this->select60 = false;
            $this->select50 = false;
            $this->select40 = false;
            $this->select30 = false;
            $this->select20 = false;
        } else {
            $this->selectedStudents = [];
        }
    }

    public function editOpenModal()
    {
        $this->editModal = true;
    }

    public function updatedSelectedStudents()
    {
        $this->resetSelect();
    }

    public function resetSelect()
    {
        $this->select100 = false;
        $this->select90 = false;
        $this->select80 = false;
        $this->select70 = false;
        $this->select60 = false;
        $this->select50 = false;
        $this->select40 = false;
        $this->select30 = false;
        $this->select20 = false;
        $this->select10 = false;
    }

    public $school_year;
    public $semester;
    public $year_and_section;
    public $name;

    public function create()
    {
        $validateEvaluation = $this->validate([
            'school_year'       => 'required|unique:sses,school_year_id,NULL,id,course_code_id,'.$this->courseCode.',semester_id,'.$this->semester.',course_id,'.$this->course.',year_and_section_id,'.$this->yearAndSection,
            'semester'          => 'required',
            'instructor'        => 'required',
            'courseCode'        => 'required|unique:sses,course_code_id,NULL,id,instructor_id,'.$this->instructor.',school_year_id,'.$this->school_year,
            'course'            => 'required',
            'yearAndSection'    => 'required',
            'selectedStudents'  => 'required',
        ],[
            'selectedStudents.required' => 'This student number checkbox field is required.',
            'unique' => 'The :attribute has already exist.'
        ]);

        $evaluator = Sse::create([
            'school_year_id'        => $this->school_year,
            'semester_id'           => $this->semester,
            'instructor_id'         => $this->instructor,
            'name'                  => $this->name,
            'course_id'             => $this->course,
            'year_and_section_id'   => $this->yearAndSection,
            'course_code_id'        => $this->courseCode,
            'evaluatee'             => $this->evaluatee = count($this->selectedStudents),
        ]);
        $this->emit('created');
        $evaluator->users()->sync($this->selectedStudents);
        $this->openModal = false;
        $this->reset();
    }

    public function openEditModal()
    {
        $this->editModal = true;
    }

    public function updateSelected()
    {
        Sse::where('is_active', 1)->update([
            'is_active' => 0,
        ]);
        $this->reset();
        $this->emit('updated');
    }
    public $is_active = true;

    public function render()
    {
        if (in_array(!auth()->user()->role_id, [1,3])) {
            $this->instructors = Instructor::where(['college_id' => auth()->user()->college_id])->get() ?? null;
        } else {
            $this->instructors = Instructor::all();
        }

        return view('livewire.administrator.evaluation-page.set-student-evaluation-page',
        [
            'studentCount'  => User::where('year_and_section_id', $this->yearAndSection)->count(),
            'colleges'      => College::all(),
            'sems'          => Semester::all(),
            'yrSecs'        => YearAndSection::all(),
            'schoolYears'   => SchoolYear::all(),
            'scs'           => CourseCode::all(),
            'counts'        => Sse::count(),
            'sses'          => Sse::with('schoolYears', 'semesters','instructors',
                            'courses', 'yearSections', 'CourseCodes')
                            ->latest('id')
                            ->paginate(5),
            'activeCount'   =>Sse::where('is_active', 1)->count(),
            ]);
    }
}
