<?php

namespace App\Http\Livewire\Administrator;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.administrator.dashboard', [
            'deans'         => User::where('role_id', 2)->count(),
            'secretaries'   => User::where('role_id', 3)->count(),
            'instructors'   => User::where('role_id', 4)->count(),
            'students'      => User::where('role_id', 5)->count(),
            'users'         => User::count(),
        ]);
    }
}
