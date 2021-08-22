<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'Administrator']);
        Role::create(['name'=>'Dean']);
        Role::create(['name'=>'Secretary']);
        Role::create(['name'=>'Instructor']);
        Role::create(['name'=>'Student']);
        Role::create(['name'=>'HR']);
    }
}
