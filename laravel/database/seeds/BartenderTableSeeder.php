<?php

use Illuminate\Database\Seeder;
use App\Bartender;

class BartenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bartender::insert([
            'name' => '',
            'restaurant_id' => '',
            'vote' => '',
        ]);
    }
}
