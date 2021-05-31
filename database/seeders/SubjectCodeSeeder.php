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

        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 1 - Fundementals of Information System']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 2 - Deployment, Maintenance and Quality System']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 3 - System Analysis and Design']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 4 - Professional Issues in Information System']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 5 - Organization and Management Concepts']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 6 - Web Development']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 7 - Object Oriented Programming']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 8 - IT Infrastructures and Network Technologies']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 9 - Capstone Project 1']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 10 - Financial Management']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 11 - Database Management System']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 12 - Quantitative Method']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 13 - IS Project Management']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 14 - Enterprise Architecture']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 15 - Capstone Project 1']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 16 - Business Process Management']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 17 - E-Commerce']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 18 - IS Strategy Management and Acquisition']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 19 - Evaluation of Business Performance']);
        SubjectCode::create(['course_id'=> 1, 'name' => 'IS 20 - Practicum for Information System (486 Hours)']);

        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 1 - Fundamentals of Database Systems']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 2 - Introduction to Human Computer Interaction']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 4 - Software Engineering']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 5 - Integrative Programming and Technologies 1 (OOP)']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 6 - Database Management System']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 7 - Information Assurance and Security 1']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 8 - Capstone Project 1']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 9 - Multimedia Systems']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 10 - Social and Professional Issues']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 11 - Networking 1']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 12 - Systems Integration and Architecture 1']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 13 - Discrete Mathematics']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 14 - Capstone Project 2']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 15 - Quantitative Methods']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 16 - Networking 2']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 17 - Information Assurance and Security 2']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 18 - Systems Administration and Maintenance']);
        SubjectCode::create(['course_id'=> 2, 'name' => 'IT 19 - Practicum (486 hours)']);
    }
}
