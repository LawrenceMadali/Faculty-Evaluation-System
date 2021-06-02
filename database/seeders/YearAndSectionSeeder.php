<?php

namespace Database\Seeders;

use App\Models\YearAndSection;
use Illuminate\Database\Seeder;

class YearAndSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        YearAndSection::create(['user_id' => 4,'name'=>'1-1']);
        YearAndSection::create(['user_id' => 5,'name'=>'1-2']);
        YearAndSection::create(['user_id' => 6,'name'=>'1-3']);
        YearAndSection::create(['user_id' => 7,'name'=>'1-4']);

        YearAndSection::create(['user_id' => 4,'name'=>'1-1']);
        YearAndSection::create(['user_id' => 5,'name'=>'1-2']);
        YearAndSection::create(['user_id' => 6,'name'=>'1-3']);
        YearAndSection::create(['user_id' => 7,'name'=>'1-4']);

        YearAndSection::create(['user_id' => 4, 'name'=>'2-1']);
        YearAndSection::create(['user_id' => 5, 'name'=>'2-2']);
        YearAndSection::create(['user_id' => 6, 'name'=>'2-3']);
        YearAndSection::create(['user_id' => 7, 'name'=>'2-4']);

        YearAndSection::create(['user_id' => 4, 'name'=>'3-1']);
        YearAndSection::create(['user_id' => 5, 'name'=>'3-2']);
        YearAndSection::create(['user_id' => 6, 'name'=>'3-3']);
        YearAndSection::create(['user_id' => 7, 'name'=>'3-4']);

        YearAndSection::create(['user_id' => 4, 'name'=>'4-1']);
        YearAndSection::create(['user_id' => 5, 'name'=>'4-2']);
        YearAndSection::create(['user_id' => 6, 'name'=>'4-3']);
        YearAndSection::create(['user_id' => 7, 'name'=>'4-4']);
    }
}
