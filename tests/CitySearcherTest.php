<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once( __DIR__ . '/../CitySearcher.php');
require_once( __DIR__ . '/../Database.php');
require_once( __DIR__ . '/../CityRepository.php');

final class CitySearcherTest extends TestCase
{
    /**
     * @dataProvider provideCitySearcherData
     */
    function test_city_searcher($expectedResult, $input): void
    {
        $database = new Database();
        $cityRepository = new CityRepository($database);
        $citySearcher = new CitySearcher($cityRepository);

        $result = $citySearcher->search($input);

        $this->assertEqualsCanonicalizing($expectedResult, $result);
    }

    public static function provideCitySearcherData()
    {
        yield [
            [],
            'V',
        ];

        yield [
            [
                'Valencia',
                'Vancouver',
            ],
            'Va',
        ];

        yield [
            [
                'Valencia',
                'Vancouver',
            ],
            'Va',
        ];

        yield [
            [
                'Budapest',
            ],
            'ape',
        ];

        $database = new Database();
        $cityRepository = new CityRepository($database);
        $cities = $cityRepository->getAllCities();
        yield [
            $cities,
            '*',
        ];
    }
}