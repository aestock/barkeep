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
        foreach (range(1,200) as $index) {
            DB::table('bartender_cocktail')
                ->insert([
                    'bartender_id' => $faker->numberBetween(1,40),
                    'cocktail_id' => $faker->numberBetween(1, 41),
                    'vote' => $faker->numberBetween(10, 200)
            ]);
        }
    }
}
