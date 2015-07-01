<?php namespace App;

use App\Library\Mongo\DB;
use MongoClient;

class Group extends DB {

    /**
     * Collection name
     */
    protected $collection = 'groups';

    /**
     * Protect against mass assignment
     */
    protected $fillable = [
        'name', // e.g. Scotland
        'tags', // array of cities
    ];
}
