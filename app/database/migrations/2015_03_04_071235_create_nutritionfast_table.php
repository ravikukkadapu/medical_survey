<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionfastTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nutritionfast', function(Blueprint $table)
		{
			$table->increments('id');
			// $table->string('patient_code',30);
			// $table->string('day',30);
			// $table->string('diet_veg',30);
			// $table->string('diet_nonveg',30);
			// $table->string('diet_type',30);
			// $table->string('veg_serves',30);
			// $table->string('nonveg_serves',30);
			// $table->string('patient_ip',30);

			// $table->string('sunday',30);
			// $table->string('sunday_diet',30);
			// $table->string('sundaydiet_type',30);
			// $table->string('monday',30);
			// $table->string('monday_diet',30);
			// $table->string('mondaydiet_type',30);
			// $table->string('wednesday',30);
			// $table->string('wednesday_diet',30);
			// $table->string('wednesdaydiet_type',30);
			// $table->string('thursday',30);
			// $table->string('thursday_diet',30);
			// $table->string('thursdaydiet_type',30);

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
		Schema::drop('nutritionfast');
	}

}
