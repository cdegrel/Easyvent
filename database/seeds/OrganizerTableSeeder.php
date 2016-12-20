<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrganizerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizers')->delete();

        DB::table('organizers')->insert([
            'id' => 1,
            'name' => 'anonyme',
            'description' => 'description de l anonyme',
            'website' => 'https://www.teprow.com',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('organizers')->insert([
            'id' => 2,
            'name' => 'anonyme2',
            'description' => 'description de l anonyme numero 2',
            'website' => 'https://www.teprow.com',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
