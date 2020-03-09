<?php

namespace Test\App\Util\Validators;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\Util\Validators\Telephone;

/**
 * Class TelephoneTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\Util\Validators\Telephone
 */
class TelephoneTest extends TestCase
{
    /**
     * @covers \App\Util\Validators\Telephone::isValid
     */
    public function testIsValidIncorrectFormat(): void
    {
        $this->assertEquals(false, Telephone::isValid('123456'));
    }

    /**
     * @covers \App\Util\Validators\Telephone::isValid
     */
    public function testIsValidCorrectFormat(): void
    {
        $this->assertEquals(true, Telephone::isValid('(19) 94321-1234'));
    }
}
