<?php

namespace App\Http\Controllers\Admin\Questionair;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentQuestionairController extends Controller
{
    public function index()
    {
        return view('user-level.admin.questionairs.student-questionair');
    }
}
