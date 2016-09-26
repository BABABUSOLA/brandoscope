<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyPhonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_phones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned();
			$table->foreign('company_id')->reference('id')->on('companies');
			$table->string('phone_number');
			$table->text('description');
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
		Schema::drop('company_phones');
	}

}
