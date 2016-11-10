<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monitor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('keyword');
			$table->integer('frequency');
			$table->string('email');
			$table->string('phone_number');
			$table->integer('company_id')->unsigned();
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('monitor');
	}

}
