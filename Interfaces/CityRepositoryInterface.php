<?php


Interface CityRepositoryInterface
{
    public function getAllCities();
    public function getCityById(int $id);
}