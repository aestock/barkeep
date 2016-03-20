<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BartenderCocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        //make sure every cocktail has a bartender
        foreach (range(1,41) as $index) {
            DB::table('bartender_cocktail')
                ->insert([
                    'bartender_id' => $index,
                    'cocktail_id' => $index,
                    'vote' => $faker->numberBetween(10, 200)
                ]);
        }
    }
}
