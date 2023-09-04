<?php

require_once('Database.php');
require_once('Interfaces/CityRepositoryInterface.php');

class CitySearcher
{
    public function __construct(private CityRepositoryInterface $cityRepository)
    {
    }

    public function search($term): array
    {
        $cities = $this->cityRepository->getAllCities();

        $results = [];

        if($term == '*')
            return $cities;

        if(strlen($term) < 2)
            return $results;

        foreach ($cities as $city)
        {
            if(str_contains($city, $term))
            {
                $results[] = $city;
            }
        }

        return $results;
    }
}