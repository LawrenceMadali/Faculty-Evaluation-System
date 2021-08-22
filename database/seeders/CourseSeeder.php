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
            'instructor_id' => 1,
            'course'=>'Bachelor of Science in Information System']);
        Course::create([
            'instructor_id' => 2,
            'course'=>'Bachelor of Science in Information Technology']);
        Course::create([
            'instructor_id' => 3,
            'course'=>'Bachelor of Science in Accountancy']);
        Course::create([
            'instructor_id' => 4,
            'course'=>'Bachelor of Science in Business Administration']);
        Course::create([
            'instructor_id' => 4,
            'course'=>'Bachelor of Science in Office Administration']);
    }
}
