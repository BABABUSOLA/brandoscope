<?php

class UserTableSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tags')->delete();
		User::create(['first_name'=>'funke','last_name'=> 'ajayi','email'=> 'funkeajayi@gmail.com','mobile_phone'=> '07045562398','role_id'=> '2']);
		
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
