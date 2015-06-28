<?php namespace App\Http\Controllers;

// libraries
use Illuminate\Auth\AuthManager;
use App\Library\SelectOptions;

// models
use App\Listing;

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
    public function __construct(Listing $listing)
    {
        // set our controller's model
        $this->listing = $listing;
        
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
        // will throw an exception if not found
        $listings = $this->listing->all();
        
        // render the view script, or json if ajax request
        return $this->render('listings.index', compact('listings', 'cities'));
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
        return $this->render('listings.create', compact('cityOptions', 'hourOptions', 'minuteOptions'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AuthManager $auth, ListingRequest $request)
	{
		// save listing
        $listing = $auth->user()->listings()->create( $request->all() );
        
        // redirect
        return redirect()->to('listings')->with([
            'flash_message' => 'A new listing has been created',
        ]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, AuthManager $auth, Utils $utils)
	{
		$listing = $this->listing
            ->findOrFail($id);
        
        // render the view script, or json if ajax request
        return $this->render('listings.show', compact('listing'));
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