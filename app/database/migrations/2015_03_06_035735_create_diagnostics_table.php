<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diagnostics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('patient_code',30);
			$table->string('heartbeat_value',30);
			$table->string('heartbeatcheck_date',30);
			$table->string('bpcystolic_value',30);
			$table->string('bpdystolic_value',30);
			$table->string('bpcheck_date',30);
			$table->string('bloodsugar_fasting',30);
			$table->string('bloodsugar_random',30);
			$table->string('bloodsugar_postlunch',30);
			$table->string('bloodsugarcheck_date',30);
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
		Schema::drop('diagnostics');
	}

}
