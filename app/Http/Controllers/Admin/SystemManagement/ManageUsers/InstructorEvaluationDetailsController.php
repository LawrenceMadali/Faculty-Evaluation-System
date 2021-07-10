<?php

namespace App\Http\Controllers\Admin\SystemManagement\ManageUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorEvaluationDetailsController extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-users.instructor-evaluation-details');
    }
}
