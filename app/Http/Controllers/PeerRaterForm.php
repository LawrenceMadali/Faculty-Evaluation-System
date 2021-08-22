<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeerRaterForm extends Controller
{
    public function index()
    {
        return view('user-level.instructor.Peer to peer.index');
    }
}
