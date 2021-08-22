<?php

namespace Database\Seeders;

use App\Models\SpeUser;
use Illuminate\Database\Seeder;

class SpeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpeUser::create(['user_id' => 5, 'spe_id' => 1]);
        SpeUser::create(['user_id' => 6, 'spe_id' => 1]);
        SpeUser::create(['user_id' => 7, 'spe_id' => 1]);
    }
}
