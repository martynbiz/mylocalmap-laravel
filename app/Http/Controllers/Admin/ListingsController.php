<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// libraries
use Illuminate\Auth\AuthManager;

// models
use MongoClient;
use App\Listing;

// requests
use Request;
use App\Http\Requests\ListingRequest;

class ListingsController extends Controller {

	/**
     * @var App\Listing $listing The model for this controller
     */
    protected $listings;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->listings = new Listing( new MongoClient(), env('MONGO_DATABASE') );
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $listings = $this->listings->find();

        // render the view script, or json if ajax request
        return $this->render('admin.listings.index', compact('listings'));
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $listing = $this->listings->findOne(array('_id' => new MongoId($id)));

        // render the view script, or json if ajax request
        return $this->render('admin.listings.show', compact('listing'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AuthManager $auth, ListingRequest $request)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(AuthManager $auth, $id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(AuthManager $auth, ListingRequest $request, $id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//...

        return redirect()->to('admin.listings')->with([
            'flash_message' => 'Listing has been deleted',
        ]);
	}
}
