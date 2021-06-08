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
            'user_id'   => 4,
            'id_number' => 4000000400,
            ]);
        Instructor::create([
            'name' => 'ALBITO, NEIL JOHN P.',
            'user_id'   => 5,
            'id_number' => 4000000401,
            ]);
        Instructor::create([
            'name' => 'CABALTERA, BABY EUNICE M.',
            'user_id'   => 6,
            'id_number' => 4000000402,
            ]);
        Instructor::create([
            'name' => 'CANDELARIA, YVES XAVIER S.',
            'user_id'   => 7,
            'id_number' => 4000000403,
            ]);
    }
}
