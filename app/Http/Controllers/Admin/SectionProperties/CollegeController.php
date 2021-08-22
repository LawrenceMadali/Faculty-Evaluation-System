<?php

namespace App\Http\Controllers\Admin\SectionProperties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        return view('user-level.admin.section-properties.college');
    }
}
