<?php

namespace Database\Seeders;

use App\Models\CourseName;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseName::create(['name'=>'Bachelor of Science in Information System']);
        CourseName::create(['name'=>'Bachelor of Science in Information Technology']);
        CourseName::create(['name'=>'Bachelor of Science in Accountancy']);
        CourseName::create(['name'=>'Bachelor of Science in Business Administration']);
        CourseName::create(['name'=>'Bachelor of Science in Office Administration']);
    }
}
