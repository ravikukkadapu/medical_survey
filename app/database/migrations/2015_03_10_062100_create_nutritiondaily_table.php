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
			$table->string('fromdate',30);
			$table->string('todate',30);
			$table->string('sunday_diet',30);
			$table->string('sundaydiet_type',30);
			$table->string('monday_diet',30);
			$table->string('mondaydiet_type',30);
			$table->string('tuesday_diet',30);
			$table->string('tuesdaydiet_type',30);
			$table->string('wednesday_diet',30);
			$table->string('wednesdaydiet_type',30);
			$table->string('thursday_diet',30);
			$table->string('thursdaydiet_type',30);
			$table->string('friday_diet',30);
			$table->string('fridaydiet_type',30);
			$table->string('saturday_diet',30);
			$table->string('saturdaydiet_type',30);
			$table->string('veg_serves',30);
			$table->string('nonveg_serves',30);
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
		Schema::drop('nutritiondaily');
	}

}
