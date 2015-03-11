<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionquarterlyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nutritionquarterly', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('patient_code',30);
			$table->string('quarter1',30);
			$table->string('veg_serves1',30);
			$table->string('nonveg_serves1',30);
			$table->string('quarter2',30);
			$table->string('veg_serves2',30);
			$table->string('nonveg_serves2',30);
			$table->string('quarter3',30);
			$table->string('veg_serves3',30);
			$table->string('nonveg_serves3',30);
			$table->string('quarter4',30);
			$table->string('veg_serves4',30);
			$table->string('nonveg_serves4',30);
			$table->string('latitude',30);
			$table->string('longitude',30);
			$table->string('patient_ip',30);
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
		Schema::drop('nutritionquarterly');
	}

}
