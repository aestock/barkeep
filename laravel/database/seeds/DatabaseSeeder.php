<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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

        $this->call(FlavorsTableSeeder::class);
        $this->call(SpiritTableSeeder::class);
//        $this->call(TagTableSeeder::class);
        $this->call(CatagoryTableSeeder::class);
//        $this->call(RestaurantTableSeeder::class);
//        $this->call(BartenderTableSeeder::class);
        $this->call(CocktailTableSeeder::class);
//
//        $this->call(BartenderTagTableSeeder::class);
//        $this->call(BartenderCocktailTableSeeder::class);

        Model::reguard();
    }
}
