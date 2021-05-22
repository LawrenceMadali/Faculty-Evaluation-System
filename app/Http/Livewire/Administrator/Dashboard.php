<?php

namespace App\Http\Livewire\Administrator;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $search = '';
    public $perPage = 5;
    public $sortField = 'name';
    public $sortAsc = true;

    public function render()
    {
        // $name = User::inRandomOrder()
        // ->where('role_id', 4)
        // ->limit(10)
        // ->get()
        // ->dd(); //this code is working in random whith specific number of users
        // dd($name);

        // $admin = User::where('role_id', 1)->count();
        $deans = User::where('role_id', 2)->count();
        $secretaries = User::where('role_id', 3)->count();
        $instructors = User::where('role_id', 4)->count();
        $students = User::where('role_id', 5)->count();
        $users = User::count();
        return view('livewire.administrator.dashboard', compact(
            'users',
            'deans',
            'secretaries',
            'instructors',
            'students',
        ),[
            'usersTable' => User::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage)
        ]);
    }
}
