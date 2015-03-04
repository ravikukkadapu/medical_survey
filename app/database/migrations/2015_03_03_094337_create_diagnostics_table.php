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
			$table->string('bp_value',30);
			$table->string('bpcheck_date',30);
			$table->string('heartbeat_value',30);
			$table->string('heartbeatcheck_date',30);
			$table->string('sugarlevel_value',30);
			$table->string('sugarlevelcheck_date',30);
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
