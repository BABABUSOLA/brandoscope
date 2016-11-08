<?php

class Activity_typesTableSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('activity_types')->delete();
		Activity_type::create(['id'=> 1, 'name'=>'created a user']);
		Activity_type::create(['id'=> 2, 'name'=> 'deleted a user']);
		Activity_type::create(['id'=> 3, 'name'=> 'created an article']);
		Activity_type::create(['id'=> 4, 'name'=> 'edited an article']);
		Activity_type::create(['id'=> 5, 'name'=> 'viewed article']);
		Activity_type::create(['id'=> 6, 'name'=> 'deleted an article']);
		Activity_type::create(['id'=> 7, 'name'=> 'editted profile']);
		Activity_type::create(['id'=> 8, 'name'=> 'commented on news article']);
		Activity_type::create(['id'=> 9, 'name'=> 'registered as reader']);
		Activity_type::create(['id'=> 10, 'name'=> 'registered as author ']);
		Activity_type::create(['id'=> 11, 'name'=> 'registered as admin ']);
		Activity_type::create(['id'=> 12, 'name'=> 'user logged in']);
		Activity_type::create(['id'=> 13, 'name'=> 'user logged out']);
		Activity_type::create(['id'=> 14, 'name'=> 'subscribed for email']);
		Activity_type::create(['id'=> 15, 'name'=> 'sent a contact us message']);
		Activity_type::create(['id'=> 16, 'name'=> 'pinned article']);
		 DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
