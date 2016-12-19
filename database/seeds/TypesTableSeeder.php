<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->delete();

        $tabTypes = ['Cours', 'Conférences', 'Gala', 'Réseautage', 'Spectacle', 'Visite', 'Retraite', 'Autre'];

        for($i=0; $i<sizeof($tabTypes); $i++){
            DB::table('types')->insert([
                'wording' => $tabTypes[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
