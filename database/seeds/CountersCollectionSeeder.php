<?php

use Illuminate\Database\Seeder;

use App\User;

class CountersCollectionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$conn = new \MongoClient();
		$db = $conn->selectDB(env('MONGO_DATABASE'));

		// listings
		$db->counters->insert([
			'_id' => 'listings',
			'seq' => 0,
		]);
	}

}
