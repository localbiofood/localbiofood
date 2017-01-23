<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTimeWhenFromTimetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('timetables', function ($table) {
			$table->string('starttime')->nullable();
			$table->string('endtime')->nullable();
			$table->string('categoryCode')->nullable();
			$table->dropColumn('time_when');
			$table->dropColumn('event_length');

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('timetables', function ($table) {
			$table->dropColumn('starttime');
			$table->dropColumn('endtime');
			$table->string('time_when');
			$table->string('event_length');
			$table->dropColumn('categoryCode');

		});
    }
}
