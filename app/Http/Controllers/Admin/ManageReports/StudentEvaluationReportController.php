<?php

namespace App\Http\Controllers\Admin\ManageReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentEvaluationReportController extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-reports.student-evaluation-report');
    }
}
