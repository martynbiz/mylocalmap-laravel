<?php

use Illuminate\Database\Seeder;

use App\Region;
use App\City;

class RegionsCitiesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// populate rows - now regions table and cities are ready
		$data = [
			'United Kingdom' => [
				'England' => [
					'Bath',
					'Birmingham',
					'Bradford',
					'Brighton & Hove',
					'Bristol',
					'Cambridge',
					'Canterbury',
					'Carlisle',
					'Chelmsford',
					'Chester',
					'Chichester',
					'Coventry',
					'Derby',
					'Durham',
					'Ely',
					'Exeter',
					'Gloucester',
					'Hereford',
					'Kingston upon Hull',
					'Lancaster',
					'Leeds',
					'Leicester',
					'Lichfield',
					'Lincoln',
					'Liverpool',
					'City of London',
					'Manchester',
					'Newcastle upon Tyne',
					'Norwich',
					'Nottingham',
					'Oxford',
					'Peterborough',
					'Plymouth',
					'Portsmouth',
					'Preston',
					'Ripon',
					'Salford',
					'Salisbury',
					'Sheffield',
					'Southampton',
					'St Albans',
					'Stoke-on-Trent',
					'Sunderland',
					'Truro',
					'Wakefield',
					'Wells',
					'City of Westminster',
					'Winchester',
					'Wolverhampton',
					'Worcester',
					'York',
				],
				'Scotland' => [
					'Aberdeen',
					'Dundee',
					'Edinburgh',
					'Glasgow',
					'Inverness',
					'Perth',
					'Stirling',
				],
				'Wales' => [
					'Bangor',
					'Cardiff',
					'Newport',
					'St Asaph',
					'St David\'s',
					'Swansea',
				],
				'Northern Ireland' => [
					'Armagh',
					'Belfast',
					'Derry',
					'Lisburn',
					'Newry',
				],
			]
		];
		
		// loop through each city and region and populate the
		// regions and cities
		foreach ($data['United Kingdom'] as $name => $cities) {
			$region = Region::create(array(
				'name' => $name,
			));
			
			foreach ($cities as $name) {
				$city = City::create(array(
					'name' => $name,
					'region_id' => $region->id,
				));
			}
		}
	}

}
