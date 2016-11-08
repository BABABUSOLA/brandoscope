<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$this->call('RoleTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('TagTableSeeder');
		$this->call('Activity_typesTableSeeder');
		// $this->call('NewsTableSeeder');
	}

}
