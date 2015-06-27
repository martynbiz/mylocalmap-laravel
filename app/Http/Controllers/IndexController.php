<?php namespace App\Http\Controllers;

// models
use App\City;
use App\Region;

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

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Region $region)
	{
		// generate regions/cities array
		$citiesArray = array();
		
		$regions = $region
			->with(array('cities' => function ($city) {
				$city->orderBy('name');
			}))
			->orderBy('name')
			->get();
		
		foreach ($regions as $region) {
			$citiesArray[$region->name] = $region->cities->lists('name', 'id');
		}
        
        // render the view script, or json if ajax request
        return $this->render('index.index', compact('offers', 'citiesArray'));
	}

}
