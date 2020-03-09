<?php

namespace Test\App\ex4\Domain\ValueObject;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\ValueObject\Telephone;

/**
 * Class TelephoneTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex4\Domain\ValueObject\Telephone
 */
class TelephoneTest extends TestCase
{
    /**
     * @var Telephone $telephone An instance of "Telephone" to test.
     */
    private $telephone;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe check arguments of this constructor. */
        $this->telephone = new Telephone("a string to test");
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Telephone::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Telephone::get
     */
    public function testGet(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
