<?php

namespace App\Http\Controllers\Student\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:student')->except('logout');
    }

    public function index()
    {
        return view('user-level.student.student-auth.student-login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'student_number' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->guard('student')->attempt($request->only('student_number', 'password'))) {
            return redirect()->route('student-login')->with('status', 'These credentials do not match our records.');
        }


        return redirect()->route('home');
    }
}
