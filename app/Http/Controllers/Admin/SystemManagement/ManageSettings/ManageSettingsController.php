<?php

namespace App\Http\Controllers\Admin\SystemManagement\ManageSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageSettingsController extends Controller
{
    public function index()
    {
        return view('user-level.admin.manage-settings.manage-settings');
    }
}
