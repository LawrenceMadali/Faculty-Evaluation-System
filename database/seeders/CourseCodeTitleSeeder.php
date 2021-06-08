<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseCodeAndTitle;

class CourseCodeTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseCodeAndTitle::create(['course_code_title' => 'IS 1 - Fundementals of Information System']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 2 - Deployment, Maintenance and Quality System']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 3 - System Analysis and Design']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 4 - Professional Issues in Information System']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 5 - Organization and Management Concepts']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 6 - Web Development']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 7 - Object Oriented Programming']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 8 - IT Infrastructures and Network Technologies']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 9 - Capstone Project 1']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 10 - Financial Management']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 11 - Database Management System']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 12 - Quantitative Method']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 13 - IS Project Management']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 14 - Enterprise Architecture']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 15 - Capstone Project 1']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 16 - Business Process Management']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 17 - E-Commerce']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 18 - IS Strategy Management and Acquisition']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 19 - Evaluation of Business Performance']);
        CourseCodeAndTitle::create(['course_code_title' => 'IS 20 - Practicum for Information System (486 Hours)']);

        CourseCodeAndTitle::create(['course_code_title' => 'IT 1 - Fundamentals of Database Systems']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 2 - Introduction to Human Computer Interaction']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 4 - Software Engineering']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 5 - Integrative Programming and Technologies 1 (OOP)']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 6 - Database Management System']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 7 - Information Assurance and Security 1']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 8 - Capstone Project 1']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 9 - Multimedia Systems']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 10 - Social and Professional Issues']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 11 - Networking 1']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 12 - Systems Integration and Architecture 1']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 13 - Discrete Mathematics']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 14 - Capstone Project 2']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 15 - Quantitative Methods']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 16 - Networking 2']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 17 - Information Assurance and Security 2']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 18 - Systems Administration and Maintenance']);
        CourseCodeAndTitle::create(['course_code_title' => 'IT 19 - Practicum (486 hours)']);
    }
}
