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
			$table->string('date',30);
			$table->string('serve_type1',30);
			$table->string('diet_type1',30);
			$table->string('serve_type2',30);
			$table->string('diet_type2',30);
			$table->string('serve_type3',30);
			$table->string('diet_type3',30);
			$table->string('serve_type4',30);
			$table->string('diet_type4',30);
			$table->string('latitude',30);
			$table->string('longitude',30);
			$table->string('address',30);
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
