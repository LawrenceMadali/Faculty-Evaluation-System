<?php

namespace Database\Seeders;

use App\Models\CourseCode;
use Illuminate\Database\Seeder;

class CourseCodeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CourseCode::create(['course_id'=> 1, 'name' => 'IS 1 - Fundementals of Information System']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 2 - Deployment, Maintenance and Quality System']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 3 - System Analysis and Design']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 4 - Professional Issues in Information System']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 5 - Organization and Management Concepts']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 6 - Web Development']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 7 - Object Oriented Programming']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 8 - IT Infrastructures and Network Technologies']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 9 - Capstone Project 1']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 10 - Financial Management']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 11 - Database Management System']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 12 - Quantitative Method']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 13 - IS Project Management']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 14 - Enterprise Architecture']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 15 - Capstone Project 1']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 16 - Business Process Management']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 17 - E-Commerce']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 18 - IS Strategy Management and Acquisition']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 19 - Evaluation of Business Performance']);
        CourseCode::create(['course_id'=> 1, 'name' => 'IS 20 - Practicum for Information System (486 Hours)']);

        CourseCode::create(['course_id'=> 2, 'name' => 'IT 1 - Fundamentals of Database Systems']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 2 - Introduction to Human Computer Interaction']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 4 - Software Engineering']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 5 - Integrative Programming and Technologies 1 (OOP)']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 6 - Database Management System']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 7 - Information Assurance and Security 1']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 8 - Capstone Project 1']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 9 - Multimedia Systems']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 10 - Social and Professional Issues']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 11 - Networking 1']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 12 - Systems Integration and Architecture 1']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 13 - Discrete Mathematics']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 14 - Capstone Project 2']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 15 - Quantitative Methods']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 16 - Networking 2']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 17 - Information Assurance and Security 2']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 18 - Systems Administration and Maintenance']);
        CourseCode::create(['course_id'=> 2, 'name' => 'IT 19 - Practicum (486 hours)']);
    }
}
