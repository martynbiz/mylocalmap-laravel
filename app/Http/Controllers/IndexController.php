<?php namespace App\Http\Controllers;

use App\Library\SelectOptions;

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

	public function index()
	{
		// render the view script, or json if ajax request
        return $this->render('index.list', compact('offers', 'cityOptions'));
	}

	public function map()
	{
		// generate regions/cities array
		$cityOptions = SelectOptions::cities('Jump to...');
        
        // render the view script, or json if ajax request
        return $this->render('index.map', compact('offers', 'cityOptions'));
	}

}
