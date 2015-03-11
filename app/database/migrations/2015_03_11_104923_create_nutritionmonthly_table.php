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
			$table->string('month_name');
			$table->string('diet_veg1');
			$table->string('diet_nonveg1');
			$table->string('nonveg_serves1');
			$table->string('veg_serves1');
			$table->string('diet_veg2');
			$table->string('diet_nonveg2');
			$table->string('nonveg_serves2');
			$table->string('veg_serves2');
			$table->string('diet_veg3');
			$table->string('diet_nonveg3');
			$table->string('nonveg_serves3');
			$table->string('veg_serves3');
			$table->string('diet_veg4');
			$table->string('diet_nonveg4');
			$table->string('nonveg_serves4');
			$table->string('veg_serves4');
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
