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
            'name' => 'ABAOAG, JOYCE LYN M.',
            'college_id'   => 1,
            'id_number' => 4000000400,
            ]);
        Instructor::create([
            'name' => 'ALBITO, NEIL JOHN P.',
            'college_id'   => 1,
            'id_number' => 4000000401,
            ]);
        Instructor::create([
            'name' => 'CABALTERA, BABY EUNICE M.',
            'college_id'   => 1,
            'id_number' => 4000000402,
            ]);
        Instructor::create([
            'name' => 'CANDELARIA, YVES XAVIER S.',
            'college_id'   => 1,
            'id_number' => 4000000403,
            ]);
    }
}
