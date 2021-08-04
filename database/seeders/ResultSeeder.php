<?php

namespace Database\Seeders;

use App\Models\Results;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Results::factory()->times(20)->create();
    }
}
