<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SummaryResultController extends Controller
{
    public function index()
    {
        return view('user-level.admin.summary-result');
    }
}
