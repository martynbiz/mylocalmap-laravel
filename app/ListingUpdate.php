<?php namespace App;

use App\Library\Mongo\DB;
use MongoClient;

class ListingUpdate extends DB {

    /**
     * Collection name
     */
    protected $collection = 'listing_updates';

    /**
     * This should match Listings.. plus "reason" etc
     */
    protected $fillable = [
        'name' => '',
        'description' => '',
        'address' => '',
        'city' => '',
        'phone' => '',
        'website' => '',
        'opening_hours' => '',
        'loc' => [0,0],
        'tags' => [],

        'approved' => 0,
        'reason' => '',
    ];
}
