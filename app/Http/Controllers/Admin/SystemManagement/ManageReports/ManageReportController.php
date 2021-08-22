<?php

namespace App\Http\Controllers\Admin\SystemManagement\ManageReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageReportController extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-reports.manage-reports');
    }
}
