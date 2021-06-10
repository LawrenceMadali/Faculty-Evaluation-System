<?php

namespace App\Http\Livewire\Administrator\ManageUsers\ManageStudent;

use App\Models\User;
use App\Models\Student;
use Livewire\Component;
use App\Models\CourseCode;
use Livewire\WithPagination;
use App\Imports\StudentImport;
use App\Models\YearAndSection;

class StudentEvaluationDetails extends Component
{
    use WithPagination;

    public $createModal = false;
    public $perPage = 5;
    public $sortField = 'created_at';
    public $sortAsc = true;
    public $search = '';

    public function openCreateModal()
    {
        $this->createModal = true;
        $this->reset('student', 'course_code', 'year_and_section', 'id_number', 'name');
        $this->resetValidation();
    }

    public function closeModal()
    {
        $this->createModal = false;
        $this->reset('user_id', 'course_code', 'year_and_section', 'id_number', 'name',);
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
        $this->user = $student;
    }

    public $user;
    public function submit()
    {
        $this->validate([
            'student' => 'required',
            'course_code' => 'required|unique:students,user_id,'.$this->user->id,
            'year_and_section' => 'required|unique:students,user_id,'.$this->user->id,
            'id_number' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:students,user_id',
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
        $this->reset('student', 'course_code', 'year_and_section', 'id_number', 'name', 'email');
        $this->emit('added');
        $this->createModal = false;
    }

    // importing

    public $importModal = false;
    public $studentFile;

    public function importStudent()
    {
        $this->validate([
            'studentFile' => 'required|mimes:xlsx, xls'
        ]);

        $import = new StudentImport();
        $import->import($this->studentFile);
        $import->failures();
        if ($import->failures()->isNotEmpty()) {
            session()->flash('errorMessage', $import->failures());
        }
        else{
            $this->reset();
        }

        $this->resetValidation();
        $this->emit('import');
    }

    public function render()
    {
        return view('livewire.administrator.manage-users.manage-student.student-evaluation-details',[
            'studentSorting' => Student::search($this->search)
                                        ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                                        ->paginate($this->perPage),
        ]);
    }
}
