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
            // 'name' => 'ABAOAG, JOYCE LYN M.',
            'user_id'   => 4,
            'course_id' => 1]);
        Instructor::create([
            // 'name' => 'ALBITO, NEIL JOHN P.',
            'user_id'   => 5,
            'course_id' => 2]);
        Instructor::create([
            // 'name' => 'CABALTERA, BABY EUNICE M.',
            'user_id'   => 6,
            'course_id' => 3]);
        Instructor::create([
            // 'name' => 'CANDELARIA, YVES XAVIER S.',
            'user_id'   => 7,
            'course_id' => 4]);
    }
}
