<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Administrator',
            'id_number' => '1111111111',
            'email'     => 'Admin@example.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 1,
        ]);

        User::create([
            'name'      => 'Dean',
            'id_number' => '2222222222',
            'email'     => 'Dean@example.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 2,
            'college_id'=> 1,
        ]);

        User::create([
            'name'      => 'Secretary',
            'id_number' => '3333333333',
            'email'     => 'Secretary@example.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 3,
        ]);

        User::create([
            'name'      => 'ABAOAG, JOYCE LYN M.',
            'id_number' => 4000000400,
            'email'     => 'Example1@email.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 4,
            'college_id'=> 1,
        ]);

        User::create([
            'name'      => 'ALBITO, NEIL JOHN P.',
            'id_number' => 4000000401,
            'email'     => 'Example2@email.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 4,
            'college_id'=> 1,
        ]);

        User::create([
            'name'      => 'CABALTERA, BABY EUNICE M.',
            'id_number' => 4000000402,
            'email'     => 'Example3@email.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 4,
            'college_id'=> 1,
        ]);

        User::create([
            'name'      => 'CANDELARIA, YVES XAVIER S.',
            'id_number' => 4000000403,
            'email'     => 'Example4@email.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 4,
            'college_id'=> 1,
        ]);

        User::create([
            'name'      => 'Madali, Jan Lawrence F.',
            'id_number' => 1000000011,
            'email'     => 'Lawrencemadali14@example.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 5,
            'college_id'=> 1,
            'year_and_section_id' => 9,
        ]);

        User::create([
            'name'      => 'Peroche, Mark Angelo T.',
            'id_number' => 1000000019,
            'email'     => 'markangeloperoche1@example.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 5,
            'college_id'=> 1,
            'year_and_section_id' => 9,
        ]);

        User::create([
            'name'      => 'Tolentino, Nick Vincent D.',
            'id_number' => 1000000047,
            'email'     => 'tnick8382@example.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 5,
            'college_id'=> 1,
            'year_and_section_id' => 9,
        ]);

        User::create([
            'name'      => 'Cortez, Patricia C.',
            'id_number' => 1000000006,
            'email'     => 'cortezpatricia577@gmail.com',
            'password'  => bcrypt('ursb123password'),
            'role_id'   => 5,
            'college_id'=> 1,
            'year_and_section_id' => 9,
        ]);
    }
}
