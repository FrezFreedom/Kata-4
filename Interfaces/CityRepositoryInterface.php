<?php


Interface CityRepositoryInterface
{
    public function getAllCities(): array;
    public function getSearchCitiesByTerm(string $term): array;
}