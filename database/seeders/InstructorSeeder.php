<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instructor::create([
            'user_id'   => 4,
            'id_number' => 4000000400,
            'subject_code_id' => 1]);
        Instructor::create([
            'user_id'   => 5,
            'id_number' => 4000000401,
            'subject_code_id' => 2]);
        Instructor::create([
            'user_id'   => 6,
            'id_number' => 4000000402,
            'subject_code_id' => 3]);
        Instructor::create([
            'user_id'   => 7,
            'id_number' => 4000000403,
            'subject_code_id' => 4]);
    }
}
