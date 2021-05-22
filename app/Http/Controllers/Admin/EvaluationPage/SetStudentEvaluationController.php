<?php

namespace App\Http\Controllers\Admin\EvaluationPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetStudentEvaluationController extends Controller
{
    public function index()
    {
        return view('user-level.admin.evaluation-page.set-student-evaluation');
    }
}
