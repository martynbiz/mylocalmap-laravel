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
     * @param array $options
     */
    public static function cities($options=[])
    {
        // default options
		$options = array_merge([
			'emptyFirst' => 'Please select',
		], $options);

		// // generate regions/cities array
        // if ($options['emptyFirst']) {
	    //
	    //     // set empty option to the passed string, otherwise use default
	    //     $cities = array(
	    //         '0' => (is_string($options['emptyFirst'])) ? $options['emptyFirst'] : 'Please select',
	    //     );
        // }

        $regions = Region::with(array('cities' => function ($city) {
                $city->orderBy('name');
            }))
            ->orderBy('name')
            ->get();

		$all = array();
        foreach ($regions as $region) {
            $newRegion = array(
				'_id' => \App\Library\Utils::slugify($region->name),
				'name' => $region->name,
				'slug' => \App\Library\Utils::slugify($region->name),
				'cities' => array(),
			);
			foreach ($region->cities as $city) {
				array_push($newRegion['cities'], array(
					'_id' => \App\Library\Utils::slugify($city->name),
					'name' => $city->name,
					'slug' => \App\Library\Utils::slugify($city->name),
					'lat' => $city->lat,
					'lng' => $city->lng,
				));
			}
			array_push($all, $newRegion);
        }
		var_export($all); exit;
        return $all;
    }
}
