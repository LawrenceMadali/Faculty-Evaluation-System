<?php

namespace Database\Seeders;

use App\Models\SubjectCode;
use Illuminate\Database\Seeder;

class SubjectCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SubjectCode::create([
            'course_name_id'=> 1,
            'name' => 'IS 12 - Quantitative Method'
            ]);

        SubjectCode::create([
            'course_name_id'=> 1,
            'name' => 'IS 13 - IS Project Management'
            ]);

        SubjectCode::create([
            'course_name_id'=> 1,
            'name' => 'IS 14 - Enterprise Architecture'
            ]);

        SubjectCode::create([
            'course_name_id'=> 1,
            'name' => 'IS 15 - Capstone Project 1'
            ]);

        SubjectCode::create([
            'course_name_id'=> 1,
            'name' => 'IS 16 - Business Process Management'
            ]);

        SubjectCode::create([
            'course_name_id'=> 1,
            'name'=>'IS 17 - E-Commerce'
            ]);









    }
}
