<?php namespace App;

class Listing extends Model {

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
    
    /**
    * Listing belongs to city
    * @return \Illuminte\Database\Eloquent\Relations\belongsTo
    */    
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    
    /**
    * Listing belongs to user
    * @return \Illuminte\Database\Eloquent\Relations\belongsTo
    */    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
