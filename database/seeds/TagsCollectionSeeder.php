<?php

use Illuminate\Database\Seeder;

use App\User;

class TagsCollectionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$conn = new \MongoClient();
		$db = $conn->selectDB(env('MONGO_DB'));
		$collection = $db->groups;


		// first delete
		$collection->remove();

		$simple = array(
			array(
				'name' => 'Food',
				'tags' => array(
					array(
						'name' => 'Fruit n Veg',
					),
					array(
						'name' => 'Fishmonger',
					),
					array(
						'name' => 'Bakers',
					),
					array(
						'name' => 'Coffee Shop',
					),
					array(
						'name' => 'Alcohol',
					),
					array(
						'name' => 'Farmers\' Market',
					),
				),
			),
			array(
				'name' => 'Other',
				'tags' => array(
					array(
						'name' => 'Clothing',
					),
					array(
						'name' => 'Second hand',
					),
				)
			),
		);

		// add slug, _id
		$groups = array();
		foreach($simple as $group) {

			$newGroup = array(
				'_id' => \App\Library\Utils::slugify($group['name']),
				'name' => $group['name'],
				'slug' => \App\Library\Utils::slugify($group['name']),
				'tags' => array(),
			);

			foreach($group['tags'] as $tag) {
				array_push($newGroup['tags'], array(
					'_id' => \App\Library\Utils::slugify($tag['name']),
					'name' => $tag['name'],
					'slug' => \App\Library\Utils::slugify($tag['name']),
				));
			}

			array_push($groups, $newGroup);
		}

		// now insert
		$conn = new \MongoClient();
		$db = $conn->selectDB(env('MONGO_DB'));
		foreach ($groups as $group) {
			$db->groups->insert($group);
		}
	}

}
