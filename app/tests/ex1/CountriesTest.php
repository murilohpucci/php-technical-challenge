<?php

namespace Test\App\ex1;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex1\Countries;

/**
 * Class CountriesTest.
 * @covers \App\ex1\Countries
 */
class CountriesTest extends TestCase
{
    /**
     * @var Countries $countries An instance of "Countries" to test.
     */
    private $countries;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->countries = new Countries();
    }

    /**
     * @covers \App\ex1\Countries::sortByCapital
     */
    public function testSortByCapital(): void
    {
        $expected = [
            'Brasil'    => 'Brasília',
            'Argentina' => 'Bueno Aires',
            'Mexico'    => 'Cidade do México',
            'Espanha'   => 'Madrid',
            'Japao'     => 'Tóquio',
            'EUA'       => 'Washington'
        ];
        $this->assertEquals($expected, $this->countries->sortByCapital());
    }
}
