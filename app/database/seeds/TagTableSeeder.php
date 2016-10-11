<?php

class TagTableSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tags')->delete();
		Tag::create(['id'=> 1, 'name'=>'News']);
		Tag::create(['id'=> 2, 'name'=> 'Sponsored']);
		Tag::create(['id'=> 3, 'name'=> 'Ad']);
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
