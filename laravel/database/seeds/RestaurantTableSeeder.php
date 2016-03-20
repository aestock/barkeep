<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $restaurants = [
        'The Charming Wharf',
        'The Lakeside Angel',
        'Vertigo',
        'The Peacock',
        'Vista',
        'The Nightingale',
        'Butlers',
        'Hibiscus',
        'The Oval Clam',
        'Pavilion',
        'Paragon',
        'Trilogy',
        'Solstice',
        'Fluorescence',
        'The Rose',
        'Parlay',
        'The Wall',
        'Brimstone',
        'Retro',
        'Petals'
    ];
    public function run()
    {
        foreach (range(1,20) as $index) {
            Restaurant::insert([
                'name' => $this->restaurants[$index - 1],
                'city' => 'Pittsburgh',
                'state' => 'PA'
            ]);
        }

    }
}
