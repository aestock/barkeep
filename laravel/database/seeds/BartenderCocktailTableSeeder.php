<?php

use Illuminate\Database\Seeder;

class BartenderCocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bartender_cocktail')
            ->insert([
                'bartender_id' => ,
                'cocktail_id' => ,
                'vote' =>
            ]);
    }
}
