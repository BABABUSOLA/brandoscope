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
		User::create(['first_name'=>'Mercy','last_name'=> 'Adejare','email'=> 'mercyadejare@gmail.com','mobile_phone'=> '08034354678','role_id'=> '1']);
		User::create(['first_name'=>'Adetoun','last_name'=> 'Olamijulo','email'=> 'adetounolamijulo@gmail.com','mobile_phone'=> '08055667867','role_id'=> '2']);
		User::create(['first_name'=>'Ayoade','last_name'=> 'Kosoko','email'=> 'ayoadekosoko@gmail.com','mobile_phone'=> '09034564321','role_id'=> '3']);
		
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
