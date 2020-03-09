<?php

namespace Test\App\ex1;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex1\Countries;

/**
 * Class CountriesTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
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
        /** @todo Maybe add some arguments to this constructor */
        $this->countries = new Countries();
    }

    /**
     * @covers \App\ex1\Countries::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex1\Countries::sortByCapital
     */
    public function testSortByCapital(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
