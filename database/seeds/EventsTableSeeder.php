<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();

        DB::table('events')->insert([
            'id' => 1,
            'title' => 'Event 1',
            'description' => 'Big event à ne pas rater',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now(),
            'address' => 'Avenue du bois de france',
            'postal_code' => '45123',
            'city' => 'Eventville',
            'country' => 'France',
            'organizer_id' => 1,
            'category_id' => 1,
            'type_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('events')->insert([
            'id' => 2,
            'title' => 'Event 2',
            'description' => 'Big event à ne pas rater',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now(),
            'address' => 'Avenue du bois de france',
            'postal_code' => '45123',
            'city' => 'Eventville',
            'country' => 'France',
            'organizer_id' => 1,
            'category_id' => 2,
            'type_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('events')->insert([
            'id' => 3,
            'title' => 'Event 3',
            'description' => 'Big event à ne pas rater',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now(),
            'address' => 'Avenue du bois de france',
            'postal_code' => '45123',
            'city' => 'Eventville',
            'country' => 'France',
            'organizer_id' => 1,
            'category_id' => 1,
            'type_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
