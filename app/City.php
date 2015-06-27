<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
    
    /**
     * Protect against mass assignment
     */
    protected $fillable = [
        'name',
        'region_id',
    ];

}
