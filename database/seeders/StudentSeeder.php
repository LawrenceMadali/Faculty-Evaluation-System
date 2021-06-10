<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name'              => 'Madali, Jan Lawrence F.',
            'email'             => 'lawrencemadali@example.com',
            'id_number'         => 1011800386,
            'user_id'           => 8,
            'course_id'         => 1,
            'year_and_section_id' => 9,
        ]);

        Student::create([
            'name'      => 'Peroche, Mark Angelo T.',
            'id_number' => 1011800386,
            'email'     => 'markangeloperoche1@example.com',
            'user_id'           => 9,
            'course_id'         => 1,
            'year_and_section_id' => 9,
        ]);

        Student::create([
            'name'      => 'Tolentino, Nick Vincent D.',
            'id_number' => 1000000048,
            'email'     => 'tnick8382@example.com',
            'user_id'           => 10,
            'course_id'         => 1,
            'year_and_section_id' => 9,
        ]);

        Student::create([
            'name'      => 'Cortez, Patricia C.',
            'id_number' => 1000000006,
            'email'     => 'cortezpatricia577@gmail.com',
            'user_id'           => 11,
            'course_id'         => 1,
            'year_and_section_id' => 9,
        ]);
    }
}
