<?php

use Illuminate\Database\Seeder;
use App\Flavor;

class FlavorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */
    private $words = ['fruity', 'herbal', 'smokey', 'bubbly', 'bitter', 'anis', 'spicy', 'savory'];
    public function run()
    {
        foreach($this->words as $word) Flavor::insert(['name' => $word]);
    }
}
