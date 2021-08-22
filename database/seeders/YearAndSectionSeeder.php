<?php

namespace Database\Seeders;

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
        YearAndSection::create([
            'course_id' => 1,
            'instructor_id' => 1,
            // 'course_code_id' => 1,
            'year_and_section'=>'1-1']);
        YearAndSection::create([
            'course_id' => 2,
            'instructor_id' => 2,
            // 'course_code_id' => 2,
            'year_and_section'=>'1-2']);
        YearAndSection::create([
            'course_id' => 3,
            'instructor_id' => 3,
            // 'course_code_id' => 3,
            'year_and_section'=>'1-3']);
        YearAndSection::create([
            'course_id' => 4,
            'instructor_id' => 4,
            // 'course_code_id' => 4,
            'year_and_section'=>'1-4']);

        YearAndSection::create([
            'course_id' => 1,
            'instructor_id' => 1,
            // 'course_code_id' => 1,
            'year_and_section'=>'2-1']);
        YearAndSection::create([
            'course_id' => 2,
            'instructor_id' => 2,
            // 'course_code_id' => 2,
            'year_and_section'=>'2-2']);
        YearAndSection::create([
            'course_id' => 3,
            'instructor_id' => 3,
            // 'course_code_id' => 3,
            'year_and_section'=>'2-3']);
        YearAndSection::create([
            'course_id' => 4,
            'instructor_id' => 4,
            // 'course_code_id' => 4,
            'year_and_section'=>'2-4']);

        YearAndSection::create([
            'course_id' => 1,
            'instructor_id' => 1,
            // 'course_code_id' => 1,
            'year_and_section'=>'3-1']);
        YearAndSection::create([
            'course_id' => 2,
            'instructor_id' => 2,
            // 'course_code_id' => 2,
            'year_and_section'=>'3-2']);
        YearAndSection::create([
            'course_id' => 3,
            'instructor_id' => 3,
            // 'course_code_id' => 3,
            'year_and_section'=>'3-3']);
        YearAndSection::create([
            'course_id' => 4,
            'instructor_id' => 4,
            // 'course_code_id' => 4,
            'year_and_section'=>'3-4']);

        YearAndSection::create([
            'course_id' => 1,
            'instructor_id' => 1,
            // 'course_code_id' => 1,
            'year_and_section'=>'4-1']);
        YearAndSection::create([
            'course_id' => 2,
            'instructor_id' => 2,
            // 'course_code_id' => 2,
            'year_and_section'=>'4-2']);
        YearAndSection::create([
            'course_id' => 3,
            'instructor_id' => 3,
            // 'course_code_id' => 3,
            'year_and_section'=>'4-3']);
        YearAndSection::create([
            'course_id' => 4,
            'instructor_id' => 4,
            // 'course_code_id' => 4,
            'year_and_section'=>'4-4']);

    }
}
