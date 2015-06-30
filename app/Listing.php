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
        'city_id',
        'lat',
        'lng',
    ];
}
