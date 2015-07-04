<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = User::create(array(
			'name' => 'Martyn Bissett',
			'email' => 'martynbissett@yahoo.co.uk',
			'password' => '$2y$10$DC7VS3vKu8VyctiB.eCx3Or05TND7bW1esayZSfeJa.Sx0MKKDtvW',
			'role' => 'admin',
		));
	}

}
