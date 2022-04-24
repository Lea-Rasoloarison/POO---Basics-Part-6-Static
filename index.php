<?php

Class Speedometer
{

public const MILES_KM_CONVERTER = 1.60934;

public static function milesToKm(float $speed): ?float
{
return $speed * self::MILES_KM_CONVERTER;
}

public static function KmToMiles(float $speed): ?float
{
    return $speed / self::MILES_KM_CONVERTER;
}
}

echo Speedometer::milesToKm(10);

echo Speedometer::KmToMiles(30);