<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Timetables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('timetables', function (Blueprint $table) {
			$table->increments('id');
			$table->string('region');
			$table->string('time_when');
			$table->integer('event_length');
			$table->string('lat');
			$table->string('lng');
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
		Schema::drop('timetables');
    }
}
