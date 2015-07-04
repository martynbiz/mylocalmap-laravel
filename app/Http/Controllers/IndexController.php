<?php namespace App\Http\Controllers;

use App\Library\SelectOptions;

class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	// public function index()
	// {
	// 	// render the view script, or json if ajax request
 //        return $this->render('index.list', compact('cityOptions'));
	// }

	public function index()
	{
		// // generate regions/cities array
		// $cityOptions = SelectOptions::cities();
		//
		// $regions = array();
		// foreach($cityOptions as $region => $cities) {
		//
		// 	$newRegion = array(
		// 		'_id' => \App\Library\Utils::slugify($region),
		// 		'name' => $region,
		// 		'slug' => \App\Library\Utils::slugify($region),
		// 		'cities' => array(),
		// 	);
		//
		// 	$newCities = array();
		// 	foreach($cities as $id => $city) {
		// 		array_push($newRegion['cities'], array(
		// 			'_id' => \App\Library\Utils::slugify($city['name']),
		// 			'name' => $city['name'],
		// 			'slug' => \App\Library\Utils::slugify($city['name']),
		// 			'lat' => $city['lat'],
		// 			'lng' => $city['lng'],
		// 		));
		// 	}
		// 	// dd($newCities);
		// 	array_push($regions, $newRegion);
		// }
		//
		// var_export($regions); exit;

		$regions = $this->regions->find();
		$groups = $this->groups->find();

        // render the view script, or json if ajax request
        return $this->render('index.index', compact('regions', 'groups'));
	}

}
