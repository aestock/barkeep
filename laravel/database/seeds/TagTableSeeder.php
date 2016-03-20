<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $words = [];
    public function run()
    {
        foreach($this->words as $word) Spirit::insert(['name' => $word]);
    }
}
