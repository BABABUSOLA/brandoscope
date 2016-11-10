<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivities extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('authenticated_user_id')->unsigned();
			$table->foreign('authenticated_user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('activity_user_id')->unsigned()->nullable();
			$table->foreign('activity_user_id')->references('id')->on('users');
			$table->integer('activity_type_id')->unsigned();
			$table->foreign('activity_type_id')->references('id')->on('activity_types')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('activities');
	}

}
