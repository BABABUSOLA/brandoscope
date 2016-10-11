<?php
use Faker\Factory as Faker;

class NewsTableSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('news')->delete();
		$faker = Faker::create();
		$categories = Category::all()->lists('id');
		$tags = Tag::all()->lists('id');
		$users = User::all()->lists('id');
		foreach(range(1,100) as $index)
		{
			News::create([
				'slug'=>$faker->word,
				'text'=>$faker->text($maxNbChars = 800, $index = 2 ),
				'category_id'=>$faker->randomElement($categories),
				'tag_id'=> $faker->randomElement($tags),
				
				]);
		}
		
		
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
