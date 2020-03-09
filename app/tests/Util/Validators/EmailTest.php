<?php

namespace Test\App\Util\Validators;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\Util\Validators\Email;

/**
 * Class EmailTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\Util\Validators\Email
 */
class EmailTest extends TestCase
{

    /**
     * @covers \App\Util\Validators\Email::isValid
     */
    public function testIsValidEmailIncorrectFormat(): void
    {
        $this->assertEquals(false, Email::isValid('mario.mario'));
    }

    /**
     * @covers \App\Util\Validators\Email::isValid
     */
    public function testIsValidEmailCorrectFormat(): void
    {
        $this->assertEquals(true, Email::isValid('mario.bros@gmail.com'));
    }
}
