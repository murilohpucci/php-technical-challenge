<?php

namespace Test\App\ex4\Domain\ValueObject;

use App\ex4\Domain\Exception\InvalidEmail;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\ValueObject\Email;

/**
 * Class EmailTest.
 * @covers \App\ex4\Domain\ValueObject\Email
 */
class EmailTest extends TestCase
{
    /**
     * @covers \App\ex4\Domain\ValueObject\Email::__construct
     */
    public function testConstruct(): void
    {
        $this->expectException(InvalidEmail::class);
        new Email('teste');
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Email::get
     */
    public function testGet(): void
    {
        $expect = 'test@test.com';
        $this->assertEquals($expect, (new Email('test@test.com'))->get());
    }
}
