<?php

namespace App\Http\Controllers\Admin\ManageUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageAccountController extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-users.manage-accounts');
    }
}
