<?php namespace App;

class City extends Model {
    
    /**
     * Protect against mass assignment
     */
    protected $fillable = [
        'name',
        'region_id',
    ];

}
