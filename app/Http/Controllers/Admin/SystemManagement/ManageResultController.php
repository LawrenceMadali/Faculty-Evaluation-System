<?php

namespace App\Http\Controllers\Admin\SystemManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageResultController extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-results.manage-result');
    }
}
