<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagePeerRaterForm extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-peer-rater-form');
    }
}
