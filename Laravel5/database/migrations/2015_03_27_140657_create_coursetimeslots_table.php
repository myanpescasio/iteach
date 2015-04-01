<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursetimeslotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_time_slots', function(Blueprint $table)
		{
			$table->string('sectionNum')->unique();
			$table->string('startTime');
			$table->string('endTime');
			$table->string('day');
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
		Schema::drop('course_time_slots');
	}

}
