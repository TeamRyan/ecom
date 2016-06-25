<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PhotosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Photo::create([
				'file_name' => 'test/file/path'.rand(200,3000).'.jpg',
				'product_id' => $index
			]);
		}
	}

}