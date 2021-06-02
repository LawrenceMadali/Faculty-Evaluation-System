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
            'name'      => 'Madali, Jan Lawrence F.',
            'user_id'   => 8,
            'id_number' => 1011800386,
            'year_and_section_id' => 9,
        ]);
    }
}
