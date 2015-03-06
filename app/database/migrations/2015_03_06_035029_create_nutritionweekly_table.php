<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionweeklyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nutritionweekly', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('patient_code',30);
			$table->string('veg_serves',30);
			$table->string('diet_veg',30);
			$table->string('nonveg_serves',30);
			$table->string('diet_nonveg',30);
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
		Schema::drop('nutritionweekly');
	}

}
