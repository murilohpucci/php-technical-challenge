<?php

namespace Test\App\ex4\Domain\ValueObject;

use App\ex4\Domain\Exception\InvalidTelephone;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\ValueObject\Telephone;

/**
 * Class TelephoneTest.
 * @covers \App\ex4\Domain\ValueObject\Telephone
 */
class TelephoneTest extends TestCase
{
    /**
     * @covers \App\ex4\Domain\ValueObject\Telephone::__construct
     */
    public function testConstruct(): void
    {
        $this->expectException(InvalidTelephone::class);
        new Telephone('(19)1234567');
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Telephone::get
     */
    public function testGet(): void
    {
        $expect = '(11) 91234-4321';
        $this->assertEquals($expect, (new Telephone('(11) 91234-4321'))->get());
    }
}
