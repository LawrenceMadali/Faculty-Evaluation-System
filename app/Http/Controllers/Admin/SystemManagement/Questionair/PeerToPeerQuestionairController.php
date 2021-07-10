<?php

namespace App\Http\Controllers\Admin\SystemManagement\Questionair;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeerToPeerQuestionairController extends Controller
{
    public function index()
    {
        return view('user-level.admin.questionairs.peer-to-peer-questionair');
    }
}
