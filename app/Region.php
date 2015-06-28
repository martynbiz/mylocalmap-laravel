<?php namespace App;

class Region extends Model {
    
    /**
    * User has many cities
    * @return \Illuminte\Database\Eloquent\Relations\HasMany
    */    
    public function cities()
    {
        return $this->hasMany('App\City');
    }

}
