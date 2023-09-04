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
        if($term == '*')
            return $this->cityRepository->getAllCities();

        if(strlen($term) < 2)
            return [];

        return $this->cityRepository->getSearchCitiesByTerm($term);
    }
}