<?php

namespace App\Http\Livewire\Administrator;

use App\Models\User;
use App\Models\Classes;
use Livewire\Component;

class Classroom extends Component
{
    public $course_code;
    public $semester;
    public $yearLevel;
    public $selectedInstructor = [];
    public $selectedStudent = [];

    public $createClassRoom = false;

    public function openModalClassRoom()
    {
        $this->createClassRoom = true;
    }

    public function submit()
    {
        // $totalCount = User::where('role_id', 5)->count();
        // $basta = count($this->selectedStudent) / $totalCount * 100;
        // dd($basta);
        $classroom = $this->validate([
            'course_code'       => 'required',
            'semester'          => 'required',
            'yearLevel'         => 'required',
            'selectedInstructor'=> 'required',
            'selectedStudent'   => 'required',
        ]);
        Classes::create($classroom);
    }

    public function render()
    {
        $instructors = User::where('role_id', 4)->get(); //select * from User table where role_id = 4;
        $students = User::where('role_id', 5)->get();
        $studentCount = User::where('role_id', 5)->count();
        return view('livewire.administrator.classroom', compact('instructors', 'students', 'studentCount'));
    }
}
