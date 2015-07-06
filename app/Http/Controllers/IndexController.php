<?php namespace App\Http\Controllers;

use App\Library\SelectOptions;

class IndexController extends Controller {

	/**
	 * 
	 */
	public function index()
	{
		$regions = $this->regions->find();
		$groups = $this->groups->find();

        // render the view script, or json if ajax request
        return $this->render('index.index', compact('regions', 'groups'));
	}

}
