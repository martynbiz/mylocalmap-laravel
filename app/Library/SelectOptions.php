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
     * @param string $emptyOption Set to what the first empty option should be
     */
    public static function cities($emptyOption=true)
    {
        // generate regions/cities array
        if ($emptyOption) {
	        
	        // set empty option to the passed string, otherwise use default
	        $cities = array(
	            '0' => (is_string($emptyOption)) ? $emptyOption : 'Please select',
	        );
        }
        
        $regions = Region::with(array('cities' => function ($city) {
                $city->orderBy('name');
            }))
            ->orderBy('name')
            ->get();
        
        foreach ($regions as $region) {
            $cities[$region->name] = $region->cities->lists('name', 'id');
        }
        
        return $cities;
    }
}