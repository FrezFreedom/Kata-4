<?php

require_once ( 'Interfaces/CityRepositoryInterface.php');
require_once ('DatabaseInterface.php');

class CityRepository implements CityRepositoryInterface
{
    public function __construct(private DatabaseInterface $database)
    {
    }

    public function getAllCities(): array
    {
        $cities = $this->database->loadTableRows('cities');
        return $cities;
    }

    public function getSearchCitiesByTerm(string $term): array
    {
        $cities = $this->database->loadTableRows('cities');

        $results = [];
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