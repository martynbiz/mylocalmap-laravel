<?php namespace App\Http\Controllers;

// libraries
use Illuminate\Auth\AuthManager;

// models
use App\Offer;
use App\City;

// requests
use App\Http\Requests\OfferRequest;

class OffersController extends Controller {
    
	/**
     * @var App\Offer $offer The model for this controller
     */
    protected $offer;
    
    /**
     * 
     */
    public function __construct(Offer $offer)
    {
        // set our controller's model
        $this->offer = $offer;
        
        // apply auth middleware to authenticate certain actions
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(City $city)
	{
        // will throw an exception if not found
        $offers = $this->offer->all();
        
        $cities = $city->all();
        
        // render the view script, or json if ajax request
        return $this->render('offers.index', compact('offers', 'cities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// we need an empty offer for the form
        $offer = new Offer;
        
        // render the view script, or json if ajax request
        return $this->render('offers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AuthManager $auth, OfferRequest $request)
	{
		// save offer
        $offer = $auth->user()->offers()->create( $request->all() );
        
        // save tags
        if ($request->input('tags')) {
            foreach($request->input('tags') as $tagId) {
                $offer->tags()->attach($tagId);
            }
        }
        
        // redirect
        return redirect()->to('offers')->with([
            'flash_message' => 'A new offer has been created',
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
		$offer = $this->offer
            ->findOrFail($id);
        
        // render the view script, or json if ajax request
        return $this->render('offers.show', compact('offer'));
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
        $offer = $auth->user()->offers()->findOrFail($id);
        
        // render the view script, or json if ajax request
        return $this->render('offers.edit', compact('offer'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(AuthManager $auth, OfferRequest $request, $id)
	{
		// will throw an exception if not found
        $offer = $auth->user()->offers()->findOrFail($id);
        
        // update the offer with the request params
        $offer->update( $request->all() );
        
        return redirect()->route('offers.show', [$id])->with([
            'flash_message' => 'Offer has been updated',
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
		$offer = $this->offer->findOrFail($id);
        
        // will throw an exception if not found
        $offer->delete();
        
        return redirect()->to('offers')->with([
            'flash_message' => 'Offer has been deleted',
        ]);
	}
}