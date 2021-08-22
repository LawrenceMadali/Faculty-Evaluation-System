<?php

namespace App\Http\Controllers\Admin\EvaluationPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetPeerEvaluationController extends Controller
{
    public function index()
    {
        return view('user-level.admin.evaluation-page.set-peer-evaluation');
    }
}
