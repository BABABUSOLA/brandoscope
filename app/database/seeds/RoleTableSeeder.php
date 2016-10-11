<?php

class RoleTableSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('roles')->delete();
		Role::create(['id'=> 1, 'name'=>'Reader']);
		Role::create(['id'=> 2, 'name'=> 'Author']);
		Role::create(['id'=> 3, 'name'=> 'Admin']);
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
