<?php namespace App\Http\Controllers;

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
        // **think we need to do aggregate to do two queries

        $query = [];

        // check if bounds have been passed, if so, build
        // geowithin query
        if ($bounds = Request::input('bounds')) {

            //make north, east, etc points
            $bounds = explode(',', $bounds);
            array_walk($bounds, function(&$value) {
                $value = floatval($value);
            });
            list($south_lat, $west_lng, $north_lat, $east_lng) = $bounds;

            //
            $query['loc'] = [
                '$geoWithin' => [
                    '$geometry' => [
                        'type' => 'Polygon' ,
                        'coordinates' => [
                            [
                                [ $east_lng, $north_lat ], //ne
                                [ $west_lng, $north_lat ], //nw
                                [ $west_lng, $south_lat ], //sw
                                [ $east_lng, $south_lat ], //se
                                [ $east_lng, $north_lat ], //ne
                            ]
                        ]
                    ]
                ]
            ]; // end $query
        }

        // check if tags have been passed, if so, set tags
        if ($tags = Request::input('tags')) {

            // db.listings.aggregate([
            //     {
            //         $match: {
            //             "tags": {
            //                 $in: ['butcher', 'fruit-n-veg', 'alcohol']
            //             }
            //         }
            //     }
            // ]);
            //http://stackoverflow.com/questions/27326748/mongodb-find-documents-that-match-the-most-tags



        }

        $listings = $this->listings->find($query);

        // dd($listings);

        // render the view script, or json if ajax request
        return $this->render('listings.index', compact('listings'));
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
		// pick up old POST values if redirect (error)
        $params = Request::old();

        // get regions for the select options
        $regions = $this->regions->find();
        $groups = $this->groups->find();

        // render the view script, or json if ajax request
        return $this->render('listings.create', compact('params', 'regions', 'groups'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AuthManager $auth, ListingRequest $request)
	{
		$values = $request->input();

        // insert to db
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
		//...

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
		//...

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
		//...

        return redirect()->to('listings')->with([
            'flash_message' => 'Listing has been deleted',
        ]);
	}
}
