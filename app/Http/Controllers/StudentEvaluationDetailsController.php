<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentEvaluationDetailsController extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-users.student-evaluation-details');
    }
}
