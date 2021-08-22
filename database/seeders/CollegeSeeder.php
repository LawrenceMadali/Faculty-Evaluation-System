<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        College::create(['name'=>'College of Computer Study']);
        College::create(['name'=>'College of Accountancy']);
        College::create(['name'=>'College of Business']);
    }
}
