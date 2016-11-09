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
		Activitytype::create(['id'=> 1, 'name'=>'created a user']);
		Activitytype::create(['id'=> 2, 'name'=> 'deleted a user']);
		Activitytype::create(['id'=> 3, 'name'=> 'created an article']);
		Activitytype::create(['id'=> 4, 'name'=> 'edited an article']);
		Activitytype::create(['id'=> 5, 'name'=> 'viewed article']);
		Activitytype::create(['id'=> 6, 'name'=> 'deleted an article']);
		Activitytype::create(['id'=> 7, 'name'=> 'editted profile']);
		Activitytype::create(['id'=> 8, 'name'=> 'commented on news article']);
		Activitytype::create(['id'=> 9, 'name'=> 'registered as reader']);
		Activitytype::create(['id'=> 10, 'name'=> 'registered as author ']);
		Activitytype::create(['id'=> 11, 'name'=> 'registered as admin ']);
		Activitytype::create(['id'=> 12, 'name'=> 'user logged in']);
		Activitytype::create(['id'=> 13, 'name'=> 'user logged out']);
		Activitytype::create(['id'=> 14, 'name'=> 'subscribed for email']);
		Activitytype::create(['id'=> 15, 'name'=> 'sent a contact us message']);
		Activitytype::create(['id'=> 16, 'name'=> 'pinned article']);
		 DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
