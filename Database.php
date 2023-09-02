<?php

require_once('DatabaseInterface.php');

class Database implements DatabaseInterface
{
    private $cities = [
        'Paris',
        'Budapest',
        'Skopje',
        'Rotterdam',
        'Valencia',
        'Vancouver',
        'Amsterdam',
        'Vienna',
        'Sydney',
        'New York City',
        'London',
        'Bangkok',
        'Hong Kong',
        'Dubai',
        'Rome',
        'Istanbul',
    ];
    public function loadTableRows(string $tableName)
    {
        return $this->$tableName;
    }
}
