<?php

namespace Database\Seeders;

use App\Models\CollegeCourse;
use Illuminate\Database\Seeder;

class CollegeCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CollegeCourse::create([
            'college_name' => 'College of Computer Study',
            'course_name1' => 'BSIS',
        ]);
    }
}
