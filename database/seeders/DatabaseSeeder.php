<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(UserStatusSeeder::class);
        $this->call(YearAndSectionSeeder::class);
        $this->call(SubjectCodeSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(SchoolYearSeeder::class);
        $this->call(SemesterSeeder::class);
    }
}
