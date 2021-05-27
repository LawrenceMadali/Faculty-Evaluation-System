<?php

namespace App\Http\Livewire\Administrator;

use App\Models\User;
use App\Models\College;
use Livewire\Component;
use App\Models\Semester;
use App\Models\YearLevel;
use App\Models\Course;
use App\Models\SchoolYear;
use App\Models\SubjectCode;
use Livewire\WithFileUploads;
use App\Models\YearAndSection;
use App\Imports\SectionsImport;
use App\Models\StudentYearSection;
use Maatwebsite\Excel\Facades\Excel;

class Section extends Component
{
    use WithFileUploads;

    public $file;
    public $importModal = false;

    public function importSection()
    {
        $this->validate([
            'file' => 'required|mimes:xlsx, xls'
        ]);

        Excel::import(new SectionsImport, $this->file);
        $this->reset();
        $this->resetValidation();
        $this->emit('imported');
    }

    // Select all or select 100%
    public $selectedStudents = [];
    public $selectAll = false;

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedStudents = User::where('role_id', 5)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedStudents = [];
        }
    }

    public function updatedSelectedStudents()
    {
        $this->selectAll = false;
    }


    public function closeModal()
    {
        $this->createModal = false;
        $this->editModal = false;
        $this->importModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public $course       = null;
    public $subject_code = null;
    public $subjectCodes = null;

    public function updatedCourse($course_id)
    {
        $this->subjectCodes = SubjectCode::where('course_id', $course_id)->get();
    }

    public $instructor = null;
    public $year_and_section = null;
    public $yearAndSection = null;

    public function updatedInstructor($user_id)
    {
        $this->yearAndSection = YearAndSection::where('user_id', $user_id)->get();
    }

    public $school_year;
    public $semester;
    public $userInstructor;
    public $course_name;
    public $name;

    public function create()
    {
        $section = Section::create([
            'name' => $this->name
        ]);
        $section->users()->attach($this->selectedStudents);
    }


    public function render()
    {
        return view('livewire.administrator.section', [
            'instructors'   => User::where('role_id', 4)->get(),
            'students'      => User::where('role_id', 5)->get(),
            'studentCount'  => User::where('role_id', 5)->count(),
            'colleges'      => College::all(),
            'courses'       => Course::all(),
            'sems'          => Semester::all(),
            'yrSecs'        => YearAndSection::all(),
            'schoolYears'   => SchoolYear::all(),
            'scs'           => SubjectCode::all(),
        ]);


    }
}
