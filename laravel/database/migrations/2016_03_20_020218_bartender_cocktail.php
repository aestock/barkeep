<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BartenderCocktail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bartender_cocktail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bartender_id')->unsigned();
            $table->integer('cocktail_id')->unsigned();
            $table->integer('vote')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bartender_cocktail');
    }
}
