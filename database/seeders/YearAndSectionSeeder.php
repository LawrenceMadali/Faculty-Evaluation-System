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
            'subject_code'  => 4,
            'name'=>'1-1']);
        YearAndSection::create([
            'instructor_id' => 1,
            'subject_code'  => 4,
            'name'=>'1-2']);
        YearAndSection::create([
            'instructor_id' => 1,
            'subject_code'  => 4,
            'name'=>'1-3']);
        YearAndSection::create([
            'instructor_id' => 1,
            'subject_code'  => 4,
            'name'=>'1-4']);

        YearAndSection::create([
            'instructor_id' => 2,
            'subject_code'  => 2,
            'name'=>'1-1']);
        YearAndSection::create([
            'instructor_id' => 2,
            'subject_code'  => 2,
            'name'=>'1-2']);
        YearAndSection::create([
            'instructor_id' => 2,
            'subject_code'  => 2,
            'name'=>'1-3']);
        YearAndSection::create([
            'instructor_id' => 2,
            'subject_code'  => 2,
            'name'=>'1-4']);

        YearAndSection::create(['instructor_id' => 2, 'name'=>'2-1']);
        YearAndSection::create(['instructor_id' => 2, 'name'=>'2-2']);
        YearAndSection::create(['instructor_id' => 2, 'name'=>'2-3']);
        YearAndSection::create(['instructor_id' => 2, 'name'=>'2-4']);

        YearAndSection::create(['instructor_id' => 3, 'name'=>'3-1']);
        YearAndSection::create(['instructor_id' => 3, 'name'=>'3-2']);
        YearAndSection::create(['instructor_id' => 3, 'name'=>'3-3']);
        YearAndSection::create(['instructor_id' => 3, 'name'=>'3-4']);

        YearAndSection::create(['instructor_id' => 4, 'name'=>'4-1']);
        YearAndSection::create(['instructor_id' => 4, 'name'=>'4-2']);
        YearAndSection::create(['instructor_id' => 4, 'name'=>'4-3']);
        YearAndSection::create(['instructor_id' => 4, 'name'=>'4-4']);
    }
}
