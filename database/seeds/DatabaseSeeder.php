<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoriesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(OrganizerTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);

        Model::reguard();
    }
}
