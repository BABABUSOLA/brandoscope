<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pins', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->integer('news_id')->unsigned();
			$table->foreign('news_id')->references('id')->on('news')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('pins', function(Blueprint $table)
		{
			//
		});
	}

}
