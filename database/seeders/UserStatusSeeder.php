<?php

namespace Database\Seeders;

use App\Models\UserStatus;
use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserStatus::create(['name' => 'Regular']);
        UserStatus::create(['name' => 'Part time']);
        UserStatus::create(['name' => 'Enrolled']);
        UserStatus::create(['name' => 'Unenrolled']);
    }
}
