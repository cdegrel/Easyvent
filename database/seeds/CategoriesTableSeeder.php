<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $tabCategories = ['Affaire', 'Santé', 'Sciences & Technologies', 'Loisirs', 'Musique', 'Autre', 'Education'];

        for($i=0; $i<sizeof($tabCategories); $i++){
            DB::table('categories')->insert([
                'wording' => $tabCategories[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
