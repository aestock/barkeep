<?php

use Illuminate\Database\Seeder;

class BartenderTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bartender_tag')
            ->insert([
            'bartender_id' => '',
            'tag_id' => '',
        ]);
    }
}
