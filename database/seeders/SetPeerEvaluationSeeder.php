<?php

namespace Database\Seeders;

use App\Models\Spe;
use Illuminate\Database\Seeder;

class SetPeerEvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spe::create([
            'name'          => 'ABAOAG, JOYCE LYN M.',
            'id_number'     => 4000000400,
            'college_id'    => 1,
            'user_id'       => 4,
            'semester_id'   => 1,
            'school_year_id'=> 1,
            'is_active'     => 1,
            'evaluatee'     => 3
        ]);
    }
}
