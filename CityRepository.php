<?php

require_once ( 'Interfaces/CityRepositoryInterface.php');
require_once ('DatabaseInterface.php');

class CityRepository implements CityRepositoryInterface
{
    public function __construct(private DatabaseInterface $database)
    {
    }

    public function getAllCities()
    {
        $cities = $this->database->loadTableRows('cities');
        return $cities;
    }

    public function getCityById(int $id)
    {
        $cities = $this->database->loadTableRows('cities');
        return $cities[$id];
    }
}