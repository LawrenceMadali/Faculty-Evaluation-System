<?php

namespace Database\Seeders;

use App\Models\Sse;
use Illuminate\Database\Seeder;

class SetStudentEvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sse::create([
            'name'              => 'ABAOAG, JOYCE LYN M.',
            'id_number'         => 4000000400,
            'college_id'        => 1,
            'instructor_id'     => 1,
            'school_year_id'    => 1,
            'semester_id'       => 1,
            'course_id'         => 1,
            'year_and_section_id' => 1,
            'course_code_id'    => 139,
            'is_active'         => 1,
            'evaluatee'         => 4,
        ]);
    }
}
