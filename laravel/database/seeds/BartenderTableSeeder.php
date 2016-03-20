<?php

use Illuminate\Database\Seeder;
use App\Bartender;
use App\Restaurant;

use Faker\Factory as Faker;

class BartenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,40) as $index) {
            Bartender::insert([
                'name' => $faker->name,
                'restaurant_id' => $faker->numberBetween(1, 10),
                'followers' => $faker->biasedNumberBetween(0, 100),
            ]);
        }
    }
}
