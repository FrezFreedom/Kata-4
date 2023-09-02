<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once( __DIR__ . '/../CitySearcher.php');
require_once( __DIR__ . '/../Database.php');

final class CitySearcherTest extends TestCase
{
    /**
     * @dataProvider provideCitySearcherData
     */
    function test_city_searcher($expectedResult, $input): void
    {
        $database = new Database();
        $citySearcher = new CitySearcher($database);

        $result = $citySearcher->search($input);

        $this->assertSame($expectedResult, $result);
    }

    public static function provideCitySearcherData()
    {
        yield [
            [],
            'V',
        ];
    }
}