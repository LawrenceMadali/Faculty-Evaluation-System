<?php

namespace App\Http\Livewire\Administrator;

use App\Models\User;
use App\Models\College;
use Livewire\Component;
use App\Models\Semester;
use App\Models\Course;
use App\Models\SchoolYear;
use App\Models\CourseCode;
use App\Models\YearAndSection;

class Evaluator extends Component
{
    public $course       = null;
    public $course_code = null;
    public $CourseCodes = null;

    public function updatedCourse($course_id)
    {
        $this->CourseCodes = CourseCode::where('course_id', $course_id)->get();
    }

    public $instructor = null;
    public $yearAndSection = null;

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
            $this->selectedStudents = User::where('role_id', 5)
            ->pluck('id_number')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
        // dd($this->selectedStudents);
    }

    public function updatedSelectedStudents()
    {
        $this->select100 = false;
        $this->select50 = false;
    }

    public $select50 = false;
    public $percentage;

    public function updatedSelect50($value)
    {
        $allStudents = User::where('role_id', 5)->count();
        $this->percentage = count($this->selectedStudents) / $allStudents * 50;
        dd($this->percentage);

        if ($value) {
            $this->selectedStudents = User::where('role_id', 5)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
    }

    public $sy_1;
    public $sy_2;

    public function render()
    {
        return view('livewire.administrator.evaluator', [
            'instructors'   => User::where('role_id', 4)->get(),
            'students'      => User::where('role_id', 5)->get(),
            'studentCount'  => User::where('role_id', 5)->count(),
            'colleges'      => College::all(),
            'courses'       => Course::all(),
            'sems'          => Semester::all(),
            'yrSecs'        => YearAndSection::all(),
            'schoolYears'   => SchoolYear::all(),
            'scs'           => CourseCode::all(),
        ]);
    }
}
