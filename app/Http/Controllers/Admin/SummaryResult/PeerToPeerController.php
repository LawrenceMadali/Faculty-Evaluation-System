<?php

namespace App\Http\Controllers\Admin\SummaryResult;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeerToPeerController extends Controller
{
    public function index()
    {
        return view('user-level.admin.summary-result.peer-to-peer');
    }
}
