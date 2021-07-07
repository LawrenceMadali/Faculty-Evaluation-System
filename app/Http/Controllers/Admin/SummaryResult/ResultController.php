<?php

namespace App\Http\Controllers\Admin\SummaryResult;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        return view('user-level.admin.summary-result.result');
    }
}
