<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('SalesTableSeeder');
		$this->call('CartsTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('PhotosTableSeeder');
		$this->call('ProductsCartsTableSeeder');
		$this->call('ProductsSalesTableSeeder');

		Eloquent::reguard();
	}

}
