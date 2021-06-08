<?php

namespace App\Http\Livewire\Administrator\ManageUsers\ManageStudent;

use App\Models\User;
use App\Models\Student;
use Livewire\Component;
use App\Models\CourseCode;
use App\Models\YearAndSection;

class StudentEvaluationDetails extends Component
{
    public $createModal = true;

    public function openCreateModal()
    {
        $this->createModal = true;
        $this->resetValidation();
    }

    public $name;
    public $email;
    public $user_id;
    public $id_number;

    public $studentUsers;
    public $students;
    public $student;
    public $year_and_sections;
    public $year_and_section;
    public $course_codes;
    public $course_code;

    public function mount()
    {
        $this->studentUsers = User::where('role_id', 5)->get();
        $this->students = Student::with('course_codes', 'yearAndSections')->get();
        $this->year_and_sections = YearAndSection::all();
        $this->course_codes = CourseCode::all();

    }

    public function updatedStudent()
    {
        $student = User::find($this->student);
        $this->name = $student->name ?? null;
        $this->email = $student->email ?? null;
        $this->id_number = $student->id_number ?? null;
    }

    public function submit()
    {
        $this->validate([
            'student' => 'required',
            'course_code' => 'required|unique:students,id_number',
            'year_and_section' => 'required|unique:students,year_and_section_id',
            'id_number' => 'required|unique:students,id_number',
            'name' => 'required|unique:students,name',
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create([
            'user_id' => $this->student,
            'course_code_id' => $this->course_code,
            'year_and_section_id' => $this->year_and_section,
            'id_number' => $this->id_number,
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->resetValidation();
        $this->emit('added');
    }

    public function render()
    {
        return view('livewire.administrator.manage-users.manage-student.student-evaluation-details');
    }
}
