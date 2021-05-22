<?php

namespace App\Http\Controllers\Admin\SectionProperties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('user-level.admin.section-properties.course');
    }
}
