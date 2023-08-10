<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once( __DIR__ . '/../CitySearcher.php');

final class CitySearcherTest extends TestCase
{
    /**
     * @dataProvider provideCitySearcherData
     */
    function test_city_searcher($expectedResult, $input): void
    {
        $citySearcher = new CitySearcher();

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