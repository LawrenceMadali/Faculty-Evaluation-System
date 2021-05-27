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

        SubjectCode::create(['year_and_section_id'=> 1, 'name' => 'IS 12 - Quantitative Method']);
        SubjectCode::create(['year_and_section_id'=> 2, 'name' => 'IS 13 - IS Project Management']);
        SubjectCode::create(['year_and_section_id'=> 3, 'name' => 'IS 14 - Enterprise Architecture']);
        SubjectCode::create(['year_and_section_id'=> 1, 'name' => 'IS 15 - Capstone Project 1']);
        SubjectCode::create(['year_and_section_id'=> 2, 'name' => 'IS 16 - Business Process Management']);
        SubjectCode::create(['year_and_section_id'=> 3, 'name' => 'IS 17 - E-Commerce']);
    }
}
