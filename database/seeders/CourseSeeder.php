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
        Course::create([
            'college_id' => 1,
            'name'=>'Bachelor of Science in Information System']);
        Course::create([
            'college_id' => 1,
            'name'=>'Bachelor of Science in Information Technology']);
        Course::create([
            'college_id' => 2,
            'name'=>'Bachelor of Science in Accountancy']);
        Course::create([
            'college_id' => 3,
            'name'=>'Bachelor of Science in Business Administration']);
        Course::create([
            'college_id' => 3,
            'name'=>'Bachelor of Science in Office Administration']);
    }
}
