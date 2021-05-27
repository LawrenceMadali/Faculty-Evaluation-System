<?php

namespace Database\Seeders;

use App\Models\Course;
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
        Course::create(['name'=>'Bachelor of Science in Information System']);
        Course::create(['name'=>'Bachelor of Science in Information Technology']);
        Course::create(['name'=>'Bachelor of Science in Accountancy']);
        Course::create(['name'=>'Bachelor of Science in Business Administration']);
        Course::create(['name'=>'Bachelor of Science in Office Administration']);
    }
}
