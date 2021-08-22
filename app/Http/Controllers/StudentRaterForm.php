<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentRaterForm extends Controller
{
    public function index()
    {
        return view('user-level.student.student rater form.index');
    }
}
