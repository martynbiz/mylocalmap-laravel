<?php namespace App\Http\Controllers;

// libraries
use Illuminate\Auth\AuthManager;
use App\Library\SelectOptions;

// models
use MongoClient;
use MongoId;
use App\City; //**put this into mongodb, seed?

// requests
use App\Http\Requests\ListingRequest;

class ListingsController extends Controller {

	/**
     * @var App\Listing $listing The model for this controller
     */
    protected $listing;

    /**
     *
     */
    public function __construct()
    {
        // set our controller's model
        $conn = new MongoClient();
        $this->listings = $conn->selectDB( env('MONGO_DB') )->listings;

        // apply auth middleware to authenticate certain actions
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // render the view script, or json if ajax request
        return $this->render('listings.index');
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
        return $this->render('listings.show', compact('listing'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// generate regions/cities array
		$cityOptions = SelectOptions::cities();

        // render the view script, or json if ajax request
        return $this->render('listings.create', compact('cityOptions'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AuthManager $auth, ListingRequest $request, City $c)
	{
		// fetch the geocodes for this address
		$city = $c->findOrFail( $request->get('city_id') );
		$fullAddress = $request->get('address') . ', ' .
			$city->name . ', United Kingdom';

		$curl     = new \Ivory\HttpAdapter\CurlHttpAdapter();
		$geocoder = new \Geocoder\Provider\GoogleMaps($curl);

		// fetch the address
		$geos = $geocoder
			->limit(1)
			->geocode($fullAddress);

		// add lat/lng to request params
		if ( $geos->count() ) {
			$values = array_merge($request->input(), [
				'lat' => $geos->first()->getLatitude(),
				'lng' => $geos->first()->getLongitude(),
			]);
		}

		// save listing with $values
        $this->listings->insert($values);

        // redirect
        return redirect()->to('listings')->with([
            'flash_message' => 'A new listing has been created',
        ]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(AuthManager $auth, $id)
	{
		// will throw an exception if not found
        $listing = $auth->user()->listings()->findOrFail($id);

        // render the view script, or json if ajax request
        return $this->render('listings.edit', compact('listing'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(AuthManager $auth, ListingRequest $request, $id)
	{
		// will throw an exception if not found
        $listing = $auth->user()->listings()->findOrFail($id);

        // update the listing with the request params
        $listing->update( $request->all() );

        return redirect()->route('listings.show', [$id])->with([
            'flash_message' => 'Listing has been updated',
        ]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$listing = $this->listing->findOrFail($id);

        // will throw an exception if not found
        $listing->delete();

        return redirect()->to('listings')->with([
            'flash_message' => 'Listing has been deleted',
        ]);
	}
}
