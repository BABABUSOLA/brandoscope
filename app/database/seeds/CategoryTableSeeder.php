<?php

class CategoryTableSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categories')->delete();
		Category::create(['id'=> 1, 'name'=>'Academic']);
		Category::create(['id'=> 2, 'name'=> 'Action']);
		Category::create(['id'=> 3, 'name'=> 'Adventure']);
		Category::create(['id'=> 4, 'name'=> 'Agriculture']);
		Category::create(['id'=> 5, 'name'=> 'Architecture']);
		Category::create(['id'=> 6, 'name'=> 'Art']);
		Category::create(['id'=> 7, 'name'=> 'Autobiography']);
		Category::create(['id'=> 8, 'name'=> 'Biography']);
		Category::create(['id'=> 9, 'name'=> 'Board Books']);
		Category::create(['id'=> 10, 'name'=> 'Business']);
		Category::create(['id'=> 11, 'name'=> 'Calender']);
		Category::create(['id'=> 12, 'name'=> 'Children']);
		Category::create(['id'=> 13, 'name'=> 'Christian']);
		Category::create(['id'=> 14, 'name'=> 'Cinema']);
		Category::create(['id'=> 15, 'name'=> 'Classics']);
		Category::create(['id'=> 16, 'name'=> 'College']);
		Category::create(['id'=> 17, 'name'=> 'Comics']);
		Category::create(['id'=> 18, 'name'=> 'Commercial Fiction']);
		Category::create(['id'=> 19, 'name'=> 'Computer']);
		Category::create(['id'=> 20, 'name'=> 'Construction']);
		Category::create(['id'=> 21, 'name'=> 'Contemporary']);
		Category::create(['id'=> 22, 'name'=> 'Cookbook']);
		Category::create(['id'=> 23, 'name'=> 'Crafts']);
		Category::create(['id'=> 24, 'name'=> 'Crime']);
		Category::create(['id'=> 25, 'name'=> 'Criticsm']);
		Category::create(['id'=> 26, 'name'=> 'Cultural Studies']);
		Category::create(['id'=> 27, 'name'=> 'Current Affairs']);
		Category::create(['id'=> 28, 'name'=> 'Design']);
		Category::create(['id'=> 29, 'name'=> 'Diet']);
		Category::create(['id'=> 30, 'name'=> 'Drama']);
		Category::create(['id'=> 31, 'name'=> 'Ecology']);
		Category::create(['id'=> 32, 'name'=> 'Economics']);
		Category::create(['id'=> 33, 'name'=> 'Education']);
		Category::create(['id'=> 34, 'name'=> 'Encyclopedia']);
		Category::create(['id'=> 35, 'name'=> 'Entertainment']);
		Category::create(['id'=> 36, 'name'=> 'Essays']);
		Category::create(['id'=> 37, 'name'=> 'Family']);
		Category::create(['id'=> 38, 'name'=> 'Fantasy']);
		Category::create(['id'=> 39, 'name'=> 'Fiction']);
		Category::create(['id'=> 40, 'name'=> 'Film']);
		Category::create(['id'=> 41, 'name'=> 'Finance']);
		Category::create(['id'=> 42, 'name'=> 'Fitness']);
		Category::create(['id'=> 43, 'name'=> 'Food']);
		Category::create(['id'=> 44, 'name'=> 'Foreign Language']);
		Category::create(['id'=> 45, 'name'=> 'Games']);
		Category::create(['id'=> 46, 'name'=> 'Gardening']);
		Category::create(['id'=> 47, 'name'=> 'Gender Fiction']);
		Category::create(['id'=> 48, 'name'=> 'Government']);
		Category::create(['id'=> 49, 'name'=> 'Graphic Novel']);
		Category::create(['id'=> 50, 'name'=> 'Health']);
		Category::create(['id'=> 51, 'name'=> 'Historical Fiction']);
		Category::create(['id'=> 52, 'name'=> 'History']);
		Category::create(['id'=> 53, 'name'=> 'Hobby']);
		Category::create(['id'=> 54, 'name'=> 'Horror']);
		Category::create(['id'=> 55, 'name'=> 'How To']);
		Category::create(['id'=> 56, 'name'=> 'Humour']);
		Category::create(['id'=> 57, 'name'=> 'Inspirational']);
		Category::create(['id'=> 58, 'name'=> 'Journalism']);
		Category::create(['id'=> 59, 'name'=> 'Juvenile']);
		Category::create(['id'=> 60, 'name'=> 'Language']);
		Category::create(['id'=> 61, 'name'=> 'Law']);
		Category::create(['id'=> 62, 'name'=> 'Letters']);
		Category::create(['id'=> 63, 'name'=> 'Lifestyle']);
		Category::create(['id'=> 64, 'name'=> 'Literary Criticsm']);
		Category::create(['id'=> 65, 'name'=> 'Literary Fiction']);
		Category::create(['id'=> 66, 'name'=> 'Literature']);
		Category::create(['id'=> 67, 'name'=> 'Mathematics']);
		Category::create(['id'=> 68, 'name'=> 'Medical']);
		Category::create(['id'=> 69, 'name'=> 'Memoir']);
		Category::create(['id'=> 70, 'name'=> 'Military']);
		Category::create(['id'=> 71, 'name'=> 'Movies']);
		Category::create(['id'=> 72, 'name'=> 'Multicultural']);
		Category::create(['id'=> 73, 'name'=> 'Music']);
		Category::create(['id'=> 74, 'name'=> 'Mystery']);
		Category::create(['id'=> 75, 'name'=> 'Narrative']);
		Category::create(['id'=> 76, 'name'=> 'Natural History']);
		Category::create(['id'=> 77, 'name'=> 'Nature']);
		Category::create(['id'=> 78, 'name'=> 'Novel']);
		Category::create(['id'=> 79, 'name'=> 'Parenting']);
		Category::create(['id'=> 80, 'name'=> 'Performing Arts']);
		Category::create(['id'=> 81, 'name'=> 'Pets']);
		Category::create(['id'=> 82, 'name'=> 'Philosophy']);
		Category::create(['id'=> 83, 'name'=> 'Photography']);
		Category::create(['id'=> 84, 'name'=> 'Picture Books']);
		Category::create(['id'=> 85, 'name'=> 'Poetry']);
		Category::create(['id'=> 86, 'name'=> 'Political Science']);
		Category::create(['id'=> 87, 'name'=> 'Politics']);
		Category::create(['id'=> 88, 'name'=> 'Pop Culture']);
		Category::create(['id'=> 89, 'name'=> 'Poster']);
		Category::create(['id'=> 90, 'name'=> 'Psychiatry']);
		Category::create(['id'=> 91, 'name'=> 'Psycology']);
		Category::create(['id'=> 92, 'name'=> 'Reference']);
		Category::create(['id'=> 93, 'name'=> 'Relationship']);
		Category::create(['id'=> 94, 'name'=> 'Religion']);
		Category::create(['id'=> 95, 'name'=> 'Romance']);
		Category::create(['id'=> 96, 'name'=> 'School']);
		Category::create(['id'=> 97, 'name'=> 'Science']);
		Category::create(['id'=> 98, 'name'=> 'Science Fiction']);
		Category::create(['id'=> 99, 'name'=> 'Self-Help']);
		Category::create(['id'=> 100, 'name'=> 'Short Story']);
		Category::create(['id'=> 101, 'name'=> 'Social Sciences']);
		Category::create(['id'=> 102, 'name'=> 'Society']);
		Category::create(['id'=> 103, 'name'=> 'Software']);
		Category::create(['id'=> 104, 'name'=> 'Spirituality']);
		Category::create(['id'=> 105, 'name'=> 'Sports']);
		Category::create(['id'=> 106, 'name'=> 'Stage']);
		Category::create(['id'=> 107, 'name'=> 'Suspense']);
		Category::create(['id'=> 108, 'name'=> 'Teaching']);
		Category::create(['id'=> 109, 'name'=> 'Technology']);
		Category::create(['id'=> 110, 'name'=> 'Television']);
		Category::create(['id'=> 111, 'name'=> 'Text']);
		Category::create(['id'=> 112, 'name'=> 'Theology']);
		Category::create(['id'=> 113, 'name'=> 'Thriller']);
		Category::create(['id'=> 114, 'name'=> 'Transportation']);
		Category::create(['id'=> 115, 'name'=> 'Travel']);
		Category::create(['id'=> 116, 'name'=> 'True Crime']);
		Category::create(['id'=> 117, 'name'=> 'Women']);
		Category::create(['id'=> 118, 'name'=> 'Young Adult']);
		
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
