<?php

namespace Test\App\ex5;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex5\Xml;

/**
 * Class XmlTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex5\Xml
 */
class XmlTest extends TestCase
{
    /**
     * @var Xml $xml An instance of "Xml" to test.
     */
    private $xml;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe check arguments of this constructor. */
        $this->xml = new Xml("a string to test");
    }

    /**
     * @covers \App\ex5\Xml::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex5\Xml::toCsv
     */
    public function testToCsv(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex5\Xml::toString
     */
    public function testToString(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
