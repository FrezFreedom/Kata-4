<?php

require_once('Database.php');

class CitySearcher
{
    public function __construct(private DatabaseInterface $database)
    {
    }

    public function search($term): array
    {
        $cities = $this->database->loadTableRows('cities');

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