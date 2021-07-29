<?php

namespace Database\Seeders;

use App\Models\SseUser;
use Illuminate\Database\Seeder;

class SseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SseUser::create(['user_id' => 8, 'sse_id' => 1 ]);
        SseUser::create(['user_id' => 9, 'sse_id' => 1 ]);
        SseUser::create(['user_id' => 10, 'sse_id' => 1 ]);
        SseUser::create(['user_id' => 11, 'sse_id' => 1 ]);
    }
}
