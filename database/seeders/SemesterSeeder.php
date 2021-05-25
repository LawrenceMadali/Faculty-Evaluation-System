<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create(['name'=>'1st Semester']);
        Semester::create(['name'=>'2nd Semester']);
        Semester::create(['name'=>'Summer']);
    }
}
