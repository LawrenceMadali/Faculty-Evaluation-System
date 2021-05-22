<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluatorController extends Controller
{
    public function index()
    {
        return view('user-level.admin.evaluator');
    }
}
