<?php

use Illuminate\Database\Seeder;
use App\Category;

class CatagoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $words = ['refreshing', 'tiki', 'stiff', '	classic', 'flip', 'new school', 'simple'];
    public function run()
    {
        foreach($this->words as $word) Category::insert(['name' => $word]);
    }
}
