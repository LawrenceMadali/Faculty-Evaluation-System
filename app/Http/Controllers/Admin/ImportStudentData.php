<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Http\Controllers\Controller;

class ImportStudentData extends Controller
{
    use WithFileUploads;

    public $showModal = false;
    public $studentData;

    public function importModal()
    {
        $this->showModal = true;
    }
    public function index()
    {
        return view('user-level.admin.import-student-data');
    }
}
