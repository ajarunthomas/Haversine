<?php

namespace Ajarunthomas\Facades;

class Haversine{
	public static function __callStatic($name, $args){
		$formula = new Formula();
		return $formula->$name($args);
	}
}

class Formula{
	public function distance($args){
		$latitudeFrom = $args[0][0];
		$longitudeFrom = $args[0][1];
		$latitudeTo = $args[1][0];
		$longitudeTo = $args[1][1];
		$earthRadius = 6371;

		$latFrom = deg2rad($latitudeFrom);
		$lonFrom = deg2rad($longitudeFrom);
		$latTo = deg2rad($latitudeTo);
		$lonTo = deg2rad($longitudeTo);

		$latDelta = $latTo - $latFrom;
		$lonDelta = $lonTo - $lonFrom;

		$angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
		cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
		$distance = $angle * $earthRadius;

		return round($distance, 6);
	}
}