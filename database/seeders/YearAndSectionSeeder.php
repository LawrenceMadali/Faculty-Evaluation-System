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
        YearAndSection::create(['name'=>'1-1']);
        YearAndSection::create(['name'=>'1-2']);
        YearAndSection::create(['name'=>'1-3']);
        YearAndSection::create(['name'=>'1-4']);

        YearAndSection::create(['name'=>'2-1']);
        YearAndSection::create(['name'=>'2-2']);
        YearAndSection::create(['name'=>'2-3']);
        YearAndSection::create(['name'=>'2-4']);

        YearAndSection::create(['name'=>'3-1']);
        YearAndSection::create(['name'=>'3-2']);
        YearAndSection::create(['name'=>'3-3']);
        YearAndSection::create(['name'=>'3-4']);

        YearAndSection::create(['name'=>'4-1']);
        YearAndSection::create(['name'=>'4-2']);
        YearAndSection::create(['name'=>'4-3']);
        YearAndSection::create(['name'=>'4-4']);
    }
}
