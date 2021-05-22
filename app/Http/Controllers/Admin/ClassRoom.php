<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassRoom extends Controller
{
    public function index()
    {
        return view('user-level.admin.class-room');
    }
}
