<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionmonthlyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nutritionmonthly', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('patient_code');
			$table->string('month');
			$table->string('year');
			$table->string('diet_veg');
			$table->string('diet_nonveg');
			$table->string('nonveg_serves');
			$table->string('veg_serves');
			$table->string('latitude');
			$table->string('longitude');
			$table->string('patient_ip');
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
		Schema::drop('nutritionmonthly');
	}

}
