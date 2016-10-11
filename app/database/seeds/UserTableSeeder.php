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
		User::create(['first_name'=>'Emmanuel','last_name'=> 'Igbinedion','email'=> 'emmanueligbinedion@gmail.com','mobile_phone'=> '07087542312','role_id'=> '2']);
		User::create(['first_name'=>'oreoluwa','last_name'=> 'abidakun','email'=> 'oreoluwaabidakun@gmail.com','mobile_phone'=> '08123453212','role_id'=> '2']);
		User::create(['first_name'=>'funke','last_name'=> 'ajayi','email'=> 'funkeajayi@gmail.com','mobile_phone'=> '07045562398','role_id'=> '2']);
		
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
