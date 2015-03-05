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
			$table->string('heartbeat_value',10);
			$table->datetime('heartbeatcheck_date',10);
			$table->string('bpcystolic_value',10);
			$table->string('bpdystolic_value',10);
			$table->string('bpcheck_date',10);
			$table->string('bloodsugar_fasting',10);
			$table->string('bloodsugar_random',10);
			$table->string('bloodsugar_postlunch',10);
			$table->string('bloodsugarcheck_date',30);
			$table->string('patient_ip',20);
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
