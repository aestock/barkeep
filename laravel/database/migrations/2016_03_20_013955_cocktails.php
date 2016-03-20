<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Cocktails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocktails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ingredients')->nullable();
            $table->integer('spirit_id')->unsigned();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('flavor_id')->unsigned()->nullable();
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
        Schema::drop('cocktails');
    }
}
