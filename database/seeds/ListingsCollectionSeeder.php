<?php

/*
	array(
		'name' => 'Fruit n Veg',
	),
	array(
		'name' => 'Fishmonger',
	),
	array(
		'name' => 'Baker',
	),
	array(
		'name' => 'Butcher',
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
 */

use Illuminate\Database\Seeder;

use App\Listing;

class ListingsCollectionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$listings = new Listing( new MongoClient(), env('MONGO_DATABASE') );

		$listings->remove();

		$data = [
			[
				"name" => "Jarvie & Kemp Stirling family butchers",
				"description" => "",
				"tags" => [
					"butcher"
				],
				"address" => "83 Port St, Stirling FK8 2ER, United Kingdom",
				"city" => "stirling",
			],
			[
				"name" => "Alexander Gray",
				"description" => "",
				"tags" => [
					"butcher"
				],
				"address" => "16 Upper Craigs, Stirling FK8 2DG, United Kingdom",
				"city" => "stirling",
			],
			[
				"name" => "David Bennett & Son",
				"description" => "",
				"tags" => [
					"butcher"
				],
				"address" => "82 High St, Dunblane FK15 0AY",
				"city" => "stirling",
			],
			[
				"name" => "Cullen's John Butchers",
				"description" => "",
				"tags" => [
					"butcher"
				],
				"address" => "16 Henderson St, Bridge of Allan, Stirling FK9 4HS, United Kingdom",
				"city" => "stirling",
			],

			[
				"name" => "The Greengrocer",
				"description" => "",
				"tags" => [
					"greengrocer"
				],
				"address" => "81 Port St, Stirling FK8 2ER",
				"city" => "stirling",
			],

			[
				"name" => "Stirling Farmers' Market",
				"description" => "",
				"tags" => [
					"greengrocer"
				],
				"address" => "Port St, Stirling FK8 2ER",
				"city" => "stirling",
			],

			[
				"name" => "The Coffee Bothy",
				"description" => "",
				"tags" => [
					"coffee-shop"
				],
				"address" => "Manor Loan, Stirling FK9 5QA, United Kingdom",
				"city" => "stirling",
			],
			[
				"name" => "Darnley Coffee House",
				"description" => "",
				"tags" => [
					"coffee-shop"
				],
				"address" => "18 Bow St, Stirling FK8 1BS, United Kingdom",
				"city" => "stirling",
			],

			[
				"name" => "Woodwinters Wines & Whiskies",
				"description" => "",
				"tags" => [
					"alcohol"
				],
				"address" => "2 Henderson St Stirling FK9 4HT",
				"city" => "stirling",
			],
		];

		// now insert
		foreach ($data as $listing) {
			$listings->insert($listing);
		}
	}

}
