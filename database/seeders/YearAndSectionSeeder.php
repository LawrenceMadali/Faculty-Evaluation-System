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
            'instructor_id' => 1,
            'course_code_id' => 1,
            'name'=>'1-1']);
        YearAndSection::create([
            'instructor_id' => 2,
            'course_code_id' => 2,
            'name'=>'1-1']);
        YearAndSection::create([
            'instructor_id' => 3,
            'course_code_id' => 3,
            'name'=>'1-1']);
        YearAndSection::create([
            'instructor_id' => 4,
            'course_code_id' => 4,
            'name'=>'1-1']);
        YearAndSection::create([
            'instructor_id' => 1,
            'course_code_id' => 5,
            'name'=>'1-1']);
        YearAndSection::create([
            'instructor_id' => 2,
            'course_code_id' => 1,
            'name'=>'1-2']);
        YearAndSection::create([
            'instructor_id' => 3,
            'course_code_id' => 2,
            'name'=>'1-2']);
        YearAndSection::create([
            'instructor_id' => 4,
            'course_code_id' => 3,
            'name'=>'1-2']);
        YearAndSection::create([
            'instructor_id' => 1,
            'course_code_id' => 4,
            'name'=>'1-2']);
        YearAndSection::create([
            'instructor_id' => 2,
            'course_code_id' => 5,
            'name'=>'1-2']);
        YearAndSection::create([
            'instructor_id' => 3,
            'course_code_id' => 1,
            'name'=>'1-3']);
        YearAndSection::create([
            'instructor_id' => 4,
            'course_code_id' => 2,
            'name'=>'1-3']);
        YearAndSection::create([
            'instructor_id' => 1,
            'course_code_id' => 3,
            'name'=>'1-3']);
        YearAndSection::create([
            'instructor_id' => 2,
            'course_code_id' => 4,
            'name'=>'1-3']);
        YearAndSection::create([
            'instructor_id' => 3,
            'course_code_id' => 5,
            'name'=>'1-3']);
        YearAndSection::create([
            'instructor_id' => 4,
            'course_code_id' => 1,
            'name'=>'1-4']);
        YearAndSection::create([
            'instructor_id' => 1,
            'course_code_id' => 2,
            'name'=>'1-4']);
        YearAndSection::create([
            'instructor_id' => 2,
            'course_code_id' => 3,
            'name'=>'1-4']);
        YearAndSection::create([
            'instructor_id' => 3,
            'course_code_id' => 4,
            'name'=>'1-4']);
        YearAndSection::create([
            'instructor_id' => 4,
            'course_code_id' => 5,
            'name'=>'1-4']);

    }
}
