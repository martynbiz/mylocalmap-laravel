<?php namespace App;

use App\Library\Mongo\DB;
use MongoClient;

class Listing extends DB {

    /**
     * Collection name
     */
    protected $collection = 'listings';

    /**
     * Protect against mass assignment
     */
    protected $fillable = [
        'name',
        'description_short',
        'description_long',
        'address',
        'city',
        'loc',
        'tags',
        'groups'
    ];

    /**
     *
     */
    public function insert($values)
    {
        // set the lat/lng to values
        $this->setLoc($values);

        // insert to db as normal
        parent::insert($values);
    }

    /**
     * Set the lat lng of $values from it's address
     */
    protected function setLoc(&$values)
    {
        // fetch the geocodes for this address
        // $city = $c->findOrFail( $request->get('city_id') );
        $fullAddress = $values['address'] . ', United Kingdom';

        $curl     = new \Ivory\HttpAdapter\CurlHttpAdapter();
        $geocoder = new \Geocoder\Provider\GoogleMaps($curl);

        // fetch the address
        $geos = $geocoder
            ->limit(1)
            ->geocode($fullAddress);

        if ( $geos->count() ) {
            $lng = $geos->first()->getLongitude();
            $lat = $geos->first()->getLatitude();

            $values = array_merge($values, [
                'loc' => [$lng, $lat],
            ]);
        }
    }
}
