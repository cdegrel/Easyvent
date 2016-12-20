<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->delete();

        DB::table('accounts')->insert([
            'id' => 1,
            'name' => 'Degrelle',
            'first_name' => 'Cédric',
            'sex' => 'homme',
            'address' => '12 rue des raspberry',
            'postal_code' => '45123',
            'city' => 'Maville',
            'country' => 'France',
            'phone' => '0123456789',
            'mobile_phone' => '0123456789',
            'description' => 'I like Waffles ;)',
            'photo' => 'degrelle_cedric.png',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
