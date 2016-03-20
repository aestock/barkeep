<?php

use Illuminate\Database\Seeder;
use App\Spirit;

class SpiritTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $words = ['gin', 'wiskey', 'bourbon', 'vodka', 'tequila', 'vermouth', 'campari', 'absinthe', 'scotch', 'rum', 'brandy'];
    public function run()
    {
        foreach($this->words as $word) Spirit::insert(['name' => $word]);
    }
}
