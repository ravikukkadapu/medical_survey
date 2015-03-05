<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritiondailyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nutritiondaily', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('patient_code',30);
			$table->string('sunday_diet',30);
			$table->string('sundaydiet_type',5);
			$table->string('monday_diet',30);
			$table->string('mondaydiet_type',5);
			$table->string('tuesday_diet',30);
			$table->string('tuesdaydiet_type',30);
			$table->string('wednesday_diet',30);
			$table->string('wednesdaydiet_type',5);
			$table->string('thursday_diet',30);
			$table->string('thursdaydiet_type',5);
			$table->string('friday_diet',30);
			$table->string('fridaydiet_type',5);
			$table->string('saturday_diet',30);
			$table->string('saturdaydiet_type',5);
			$table->string('veg_serves',5);
			$table->string('nonveg_serves',5);
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
		Schema::drop('nutritiondaily');
	}

}
