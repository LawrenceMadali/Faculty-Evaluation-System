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
        // BS Information System
        // 1-1 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Self 1 - Understanding the Self']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Math 1 - Mathematics in the Modern World']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Eng 1 - Purposive Communication']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Filipino 1 - Pag-aaral ng Diskurso sa Pilipino']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 3 - Introduction to Computing']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 4 - Computer Programming 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 1 - Physical Fitness']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 1 - National Service Training Program']);
        // 1-1 2st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Sci & Tech 1 - Science Technology and Society']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Hum 1 - Art Appreciation']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 1 - Environmental Science']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Filipino 2 - Perspektibong Historikal ng Panitikan sa Pilipinas']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 3 - Statistics with Computer Applications']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 5 - Computer Programming 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 1 - Fundementals of Information System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 2 - Rythmic Activities']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 1,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 2 - National Service Training Program']);
        // 1-2 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Self 1 - Understanding the Self']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Math 1 - Mathematics in the Modern World']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Eng 1 - Purposive Communication']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Filipino 1 - Pag-aaral ng Diskurso sa Pilipino']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 3 - Introduction to Computing']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 4 - Computer Programming 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 1 - Physical Fitness']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 1 - National Service Training Program']);
        // 1-2 2st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Sci & Tech 1 - Science Technology and Society']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Hum 1 - Art Appreciation']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 1 - Environmental Science']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Filipino 2 - Perspektibong Historikal ng Panitikan sa Pilipinas']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 3 - Statistics with Computer Applications']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 5 - Computer Programming 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 1 - Fundementals of Information System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 2 - Rythmic Activities']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 2,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 2 - National Service Training Program']);
        // 1-3 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Self 1 - Understanding the Self']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Math 1 - Mathematics in the Modern World']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Eng 1 - Purposive Communication']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Filipino 1 - Pag-aaral ng Diskurso sa Pilipino']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 3 - Introduction to Computing']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 4 - Computer Programming 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 1 - Physical Fitness']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 1 - National Service Training Program']);
        // 1-3 2st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Sci & Tech 1 - Science Technology and Society']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Hum 1 - Art Appreciation']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 1 - Environmental Science']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Filipino 2 - Perspektibong Historikal ng Panitikan sa Pilipinas']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 3 - Statistics with Computer Applications']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 5 - Computer Programming 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 1 - Fundementals of Information System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 2 - Rythmic Activities']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 3,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 2 - National Service Training Program']);
        // 1-4 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Self 1 - Understanding the Self']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Math 1 - Mathematics in the Modern World']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Eng 1 - Purposive Communication']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Filipino 1 - Pag-aaral ng Diskurso sa Pilipino']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 3 - Introduction to Computing']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 4 - Computer Programming 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 1 - Physical Fitness']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 1 - National Service Training Program']);
        // 1-4 2st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Sci & Tech 1 - Science Technology and Society']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Hum 1 - Art Appreciation']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 1 - Environmental Science']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Filipino 2 - Perspektibong Historikal ng Panitikan sa Pilipinas']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 3 - Statistics with Computer Applications']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 5 - Computer Programming 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 1 - Fundementals of Information System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 2 - Rythmic Activities']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 4,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 2 - National Service Training Program']);

        // 2-1 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Eng 2 - English Language Enhancenment']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'History 1 - Reading in Philippine History']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'CW 1 - The Contemporary World']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 2 - Gender and Society']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELEC 1 - IS Elective 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 3 - System and Analysis and Design']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Deployment, Maintenance and Quality System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 3 - Individual/ Dual Sports/ Games']);
        // 2-1 2st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Ethics - Ethics']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 6 - Data Structure and Algorithm']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 4 - Professional Issues in Information System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 5 - Organization and Management Concepts']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 6 - Web Development']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 7 - Object Oriented Programming']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 4 - Team Sports/ Games']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 2 - Rythmic Activities']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 5,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 2 - National Service Training Program']);
        // 2-2 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Eng 2 - English Language Enhancenment']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'History 1 - Reading in Philippine History']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'CW 1 - The Contemporary World']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 2 - Gender and Society']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELEC 1 - IS Elective 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 3 - System and Analysis and Design']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Deployment, Maintenance and Quality System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 3 - Individual/ Dual Sports/ Games']);
        // 2-2 2st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Ethics - Ethics']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 6 - Data Structure and Algorithm']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 4 - Professional Issues in Information System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 6 - Organization and Management Concepts']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 6 - Web Development']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 7 - Object Oriented Programming']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 4 - Team Sports/ Games']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 2 - Rythmic Activities']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 6,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 2 - National Service Training Program']);
        // 2-3 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Eng 2 - English Language Enhancenment']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'History 1 - Reading in Philippine History']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'CW 1 - The Contemporary World']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 2 - Gender and Society']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELEC 1 - IS Elective 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 3 - System and Analysis and Design']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Deployment, Maintenance and Quality System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 3 - Individual/ Dual Sports/ Games']);
        // 2-3 2st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Ethics - Ethics']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 6 - Data Structure and Algorithm']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 4 - Professional Issues in Information System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 6 - Organization and Management Concepts']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 6 - Web Development']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 7 - Object Oriented Programming']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 4 - Team Sports/ Games']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 2 - Rythmic Activities']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 7,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 2 - National Service Training Program']);
        // 2-4 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Eng 2 - English Language Enhancenment']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'History 1 - Reading in Philippine History']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'CW 1 - The Contemporary World']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Elective 2 - Gender and Society']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELEC 1 - IS Elective 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 3 - System and Analysis and Design']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Deployment, Maintenance and Quality System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 3 - Individual/ Dual Sports/ Games']);
        // 2-4 2st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Ethics - Ethics']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 6 - Data Structure and Algorithm']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 4 - Professional Issues in Information System']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 6 - Organization and Management Concepts']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 6 - Web Development']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 7 - Object Oriented Programming']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 4 - Team Sports/ Games']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => 'PE 2 - Rythmic Activities']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 8,
            'instructor_id' => rand(1, 4),
            'course_code' => '**NSTP 2 - National Service Training Program']);

        // 3-1 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Lit 1 - Introduction to Literature and its Philosophy']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 8 - Information Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 8 - Infrastructure and Network Technologies']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 9 - Capstone Project 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 10 - Financial Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 2 - IS Elective 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 11 - Database Management']);
        // 3-1 2nd sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 12 - Quantitative Method']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 13 - IS Project Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 14 - Enterprise Architecture']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 15 - Capstone Project 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 16 - Business Process Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 9,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 17 - E-Commerce']);
        // 3-2 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Lit 1 - Introduction to Literature and its Philosophy']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 8 - Information Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 8 - Infrastructure and Network Technologies']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 9 - Capstone Project 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 10 - Financial Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 2 - IS Elective 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 11 - Database Management']);
        // 3-2 2nd sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 12 - Quantitative Method']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 13 - IS Project Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 14 - Enterprise Architecture']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 15 - Capstone Project 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 16 - Business Process Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 10,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 17 - E-Commerce']);
        // 3-3 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Lit 1 - Introduction to Literature and its Philosophy']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 8 - Information Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 8 - Infrastructure and Network Technologies']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 9 - Capstone Project 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 10 - Financial Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 2 - IS Elective 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 11 - Database Management']);
        // 3-3 2nd sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 12 - Quantitative Method']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 13 - IS Project Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 14 - Enterprise Architecture']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 15 - Capstone Project 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 16 - Business Process Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 11,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 17 - E-Commerce']);
        // 3-4 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Lit 1 - Introduction to Literature and its Philosophy']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 8 - Information Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 8 - Infrastructure and Network Technologies']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 9 - Capstone Project 1']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 10 - Financial Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 2 - IS Elective 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 11 - Database Management']);
        // 3-4 2nd sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 12 - Quantitative Method']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 13 - IS Project Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 14 - Enterprise Architecture']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 15 - Capstone Project 2']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 16 - Business Process Management']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 12,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 17 - E-Commerce']);

        // 4-1 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 13,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Rizal 1 - Life and Works of National Hero Dr. Jose Rizal']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 13,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 7 - Application Development and Emerging Technologies']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 13,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 18 - IS Strategy Management and Acquisition']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 13,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 3 - IS Elective 3']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 13,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 4 - IS Elective 4']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 13,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 19 - Evaluation of Business Performance']);
        //  4-1 2nd sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 13,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 20 - Practicum for Information System (486 Hours)']);
        // 4-2 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 14,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Rizal 1 - Life and Works of National Hero Dr. Jose Rizal']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 14,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 7 - Application Development and Emerging Technologies']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 14,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 18 - IS Strategy Management and Acquisition']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 14,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 3 - IS Elective 3']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 14,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 4 - IS Elective 4']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 14,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 19 - Evaluation of Business Performance']);
        //  4-2 2nd sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 14,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 20 - Practicum for Information System (486 Hours)']);
        // 4-3 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 15,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Rizal 1 - Life and Works of National Hero Dr. Jose Rizal']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 15,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 7 - Application Development and Emerging Technologies']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 15,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 18 - IS Strategy Management and Acquisition']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 15,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 3 - IS Elective 3']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 15,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 4 - IS Elective 4']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 15,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 19 - Evaluation of Business Performance']);
        //  4-3 2nd sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 15,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 20 - Practicum for Information System (486 Hours)']);
        // 4-4 1st sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 16,
            'instructor_id' => rand(1, 4),
            'course_code' => 'Rizal 1 - Life and Works of National Hero Dr. Jose Rizal']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 16,
            'instructor_id' => rand(1, 4),
            'course_code' => 'ITE 7 - Application Development and Emerging Technologies']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 16,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 18 - IS Strategy Management and Acquisition']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 16,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 3 - IS Elective 3']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 16,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS ELECT 4 - IS Elective 4']);
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 16,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 19 - Evaluation of Business Performance']);
        //  4-4 2nd sem
        CourseCode::create([
            'course_id' => 1,
            'semester_id' => rand(1,2),
            'year_and_section_id'=> 16,
            'instructor_id' => rand(1, 4),
            'course_code' => 'IS 20 - Practicum for Information System (486 Hours)']);
    }
}
