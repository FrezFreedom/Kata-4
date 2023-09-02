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

        if(strlen($term) < 2)
            return $results;

        foreach ($cities as $city)
        {
            if(str_starts_with($city, $term))
            {
                $results[] = $city;
            }
        }

        return $results;
    }
}