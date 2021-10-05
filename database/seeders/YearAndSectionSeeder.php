<?php

namespace Database\Seeders;

use App\Models\InstructorYearAndSection;
use App\Models\YearAndSection;
use Illuminate\Database\Seeder;

class YearAndSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        YearAndSection::create(['course_id' => 1, 'year_and_section'=>'1-1']);
        YearAndSection::create(['course_id' => 2, 'year_and_section'=>'1-2']);
        YearAndSection::create(['course_id' => 3, 'year_and_section'=>'1-3']);
        YearAndSection::create(['course_id' => 4, 'year_and_section'=>'1-4']);

        YearAndSection::create(['course_id' => 1, 'year_and_section'=>'2-1']);
        YearAndSection::create(['course_id' => 2, 'year_and_section'=>'2-2']);
        YearAndSection::create(['course_id' => 3, 'year_and_section'=>'2-3']);
        YearAndSection::create(['course_id' => 4, 'year_and_section'=>'2-4']);

        YearAndSection::create(['course_id' => 1, 'year_and_section'=>'3-1']);
        YearAndSection::create(['course_id' => 2, 'year_and_section'=>'3-2']);
        YearAndSection::create(['course_id' => 3, 'year_and_section'=>'3-3']);
        YearAndSection::create(['course_id' => 4, 'year_and_section'=>'3-4']);

        YearAndSection::create(['course_id' => 1, 'year_and_section'=>'4-1']);
        YearAndSection::create(['course_id' => 2, 'year_and_section'=>'4-2']);
        YearAndSection::create(['course_id' => 3, 'year_and_section'=>'4-3']);
        YearAndSection::create(['course_id' => 4, 'year_and_section'=>'4-4']);

        InstructorYearAndSection::create(['instructor_id' => 1, 'year_and_section_id' => 1]);
        InstructorYearAndSection::create(['instructor_id' => 2, 'year_and_section_id' => 2]);
        InstructorYearAndSection::create(['instructor_id' => 3, 'year_and_section_id' => 3]);
        InstructorYearAndSection::create(['instructor_id' => 4, 'year_and_section_id' => 4]);

        InstructorYearAndSection::create(['instructor_id' => 1, 'year_and_section_id' => 5]);
        InstructorYearAndSection::create(['instructor_id' => 2, 'year_and_section_id' => 6]);
        InstructorYearAndSection::create(['instructor_id' => 3, 'year_and_section_id' => 7]);
        InstructorYearAndSection::create(['instructor_id' => 4, 'year_and_section_id' => 8]);

        InstructorYearAndSection::create(['instructor_id' => 1, 'year_and_section_id' => 9]);
        InstructorYearAndSection::create(['instructor_id' => 2, 'year_and_section_id' => 10]);
        InstructorYearAndSection::create(['instructor_id' => 3, 'year_and_section_id' => 11]);
        InstructorYearAndSection::create(['instructor_id' => 4, 'year_and_section_id' => 12]);

        InstructorYearAndSection::create(['instructor_id' => 1, 'year_and_section_id' => 13]);
        InstructorYearAndSection::create(['instructor_id' => 2, 'year_and_section_id' => 14]);
        InstructorYearAndSection::create(['instructor_id' => 3, 'year_and_section_id' => 15]);
        InstructorYearAndSection::create(['instructor_id' => 4, 'year_and_section_id' => 16]);


    }
}
