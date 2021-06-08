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

        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IS 1 - Fundementals of Information System']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IS 2 - Deployment, Maintenance and Quality System']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IS 3 - System Analysis and Design']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IS 4 - Professional Issues in Information System']);
        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IS 5 - Organization and Management Concepts']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IS 6 - Web Development']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IS 7 - Object Oriented Programming']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IS 8 - IT Infrastructures and Network Technologies']);
        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IS 9 - Capstone Project 1']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IS 10 - Financial Management']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IS 11 - Database Management System']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IS 12 - Quantitative Method']);
        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IS 13 - IS Project Management']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IS 14 - Enterprise Architecture']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IS 15 - Capstone Project 1']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IS 16 - Business Process Management']);
        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IS 17 - E-Commerce']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IS 18 - IS Strategy Management and Acquisition']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IS 19 - Evaluation of Business Performance']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IS 20 - Practicum for Information System (486 Hours)']);

        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IT 1 - Fundamentals of Database Systems']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IT 2 - Introduction to Human Computer Interaction']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IT 4 - Software Engineering']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IT 5 - Integrative Programming and Technologies 1 (OOP)']);
        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IT 6 - Database Management System']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IT 7 - Information Assurance and Security 1']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IT 8 - Capstone Project 1']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IT 9 - Multimedia Systems']);
        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IT 10 - Social and Professional Issues']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IT 11 - Networking 1']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IT 12 - Systems Integration and Architecture 1']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IT 13 - Discrete Mathematics']);
        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IT 14 - Capstone Project 2']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IT 15 - Quantitative Methods']);
        CourseCode::create(['instructor_id'=> 3, 'course_code' => 'IT 16 - Networking 2']);
        CourseCode::create(['instructor_id'=> 4, 'course_code' => 'IT 17 - Information Assurance and Security 2']);
        CourseCode::create(['instructor_id'=> 1, 'course_code' => 'IT 18 - Systems Administration and Maintenance']);
        CourseCode::create(['instructor_id'=> 2, 'course_code' => 'IT 19 - Practicum (486 hours)']);
    }
}
