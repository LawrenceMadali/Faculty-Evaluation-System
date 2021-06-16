<?php

namespace App\Http\Controllers\Admin\ManageReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuditTrailController extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-reports.audit-trail');
    }
}
