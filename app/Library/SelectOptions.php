<?php namespace App\Library;

// models
use App\Region;

class SelectOptions
{
	/**
	 * Get an array of hour strings (00..23)
	 */
	public static function hours()
	{
		$hours = range(0, 23);
		array_walk($hours, function(&$value) {
			$value = sprintf('%02d', $value);
		});
		
		return $hours;
	}
	
	/**
	 * Get an array of hour strings (00..23)
	 */
	public static function minutes()
	{
		$minutes = range(0, 55, 5);
		array_walk($minutes, function(&$value) {
			$value = sprintf('%02d', $value);
		});
		
		return $minutes;
	}
    
    /**
     * Get cities and regions array for select
     */
    public static function cities()
    {
        // generate regions/cities array
        $citiesArray = array(
            '0' => 'Please select'
        );
        
        $regions = Region::with(array('cities' => function ($city) {
                $city->orderBy('name');
            }))
            ->orderBy('name')
            ->get();
        
        foreach ($regions as $region) {
            $citiesArray[$region->name] = $region->cities->lists('name', 'id');
        }
        
        return $citiesArray;
    }
}