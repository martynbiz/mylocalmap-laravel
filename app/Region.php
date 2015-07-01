<?php namespace App;

// class Region extends Model {
//
//     /**
//     * User has many cities
//     * @return \Illuminte\Database\Eloquent\Relations\HasMany
//     */
//     public function cities()
//     {
//         return $this->hasMany('App\City');
//     }
//
// }



use App\Library\Mongo\DB;
use MongoClient;

class Region extends DB {

    /**
     * Collection name
     */
    protected $collection = 'regions';

    /**
     * Protect against mass assignment
     */
    protected $fillable = [
        'name', // e.g. Scotland
        'cities', // array of cities
    ];
}
