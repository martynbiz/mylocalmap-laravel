<?php namespace App\Http\Controllers;

use Request;
use Response;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use MongoClient;
// use MongoId;
use App\Region;
use App\Group;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	/**
	 *
	 */
	protected $regions;

	/**
	*
	*/
	protected $groups;

	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		$this->regions = new Region( new MongoClient(), env('MONGO_DATABASE') );
		$this->groups = new Group( new MongoClient(), env('MONGO_DATABASE') );
	}

    /**
     * This is used to determine whether to render with view script, or json
     * @param string $view View script
     * @param string $data Data to pass to view or render json
     * @return string Generated view html or json
     */
    protected function render($view, $data=array())
    {
        // check if this is an ajax request, or ajax has been requested via GET (format=json)
        if (Request::ajax()) {
            return Response::json($data);
        } else {
            return view($view, $data);
        }
    }

}
