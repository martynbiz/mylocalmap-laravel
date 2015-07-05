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
    public function insert(&$values)
    {
        // set the lat/lng to values
        $this->setLoc($values);

        // insert to db as normal
        parent::insert($values);
    }

    /**
     * Will take a simple array of filter data from the front end
     * and generate the aggregate query for the collection
     */
    public function filter($filters=[])
    {
        $ops = [];

        if (isset($filters['bounds'])) {

            //make north, east, etc points
            $bounds = explode(',', $filters['bounds']);
            array_walk($bounds, function(&$value) {
                $value = floatval($value);
            });
            list($south_lat, $west_lng, $north_lat, $east_lng) = $bounds;

            //
            array_push($ops, [
                '$match' => [
                    'loc' => [
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
                    ]
                ]
            ]);
        }

        // the browser/jquery can't send an empty array (?tags[]=?) but
        // it would be useful for us as we want to pass an empty tags
        // array in if there are none specified (makes things look a
        // little more precise on the front end). So we ensure that here
        if (isset($filters['tags'])) {
            $tags = $filters['tags'];
        } else {
            $tags = [];
        }

        array_push($ops, [
            '$match' => [
                'tags' => [
                    '$in' => $tags,
                ]
            ]
        ]);

        return $this->col->aggregate($ops)['result'];
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
