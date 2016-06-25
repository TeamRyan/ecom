<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'user_name' => $faker->userName,
				'password' => Hash::make($faker->userName),
				'email' => $faker->email,
				'roles' => rand(1,3)
			]);
		}
	}

}