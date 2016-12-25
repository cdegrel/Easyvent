<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserEventTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('event_user')->insert([
            'event_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('event_user')->insert([
            'event_id' => 3,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
