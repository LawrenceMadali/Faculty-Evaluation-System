<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Administrator',
            'id_number' => '1111111111',
            'email'     => 'Admin@admin.com',
            'password'  => bcrypt('password'),
            'role_id'   => 1,
        ]);
    }
}
