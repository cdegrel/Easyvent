<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->delete();

        DB::table('tickets')->insert([
            'id' => 1,
            'title' => 'Ticket 1',
            'price' => 12.50,
            'quantity' => 120,
            'event_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tickets')->insert([
            'id' => 2,
            'title' => 'Ticket 2',
            'price' => 0,
            'quantity' => 15,
            'event_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
