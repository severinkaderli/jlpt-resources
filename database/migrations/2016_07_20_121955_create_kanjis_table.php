<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKanjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanjis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kanji');
            $table->string('meaning');
            $table->integer('jlpt-level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kanjis');
    }
}
