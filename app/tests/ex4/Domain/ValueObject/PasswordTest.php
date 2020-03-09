<?php

namespace Test\App\ex4\Domain\ValueObject;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\ValueObject\Password;

/**
 * Class PasswordTest.
 * @covers \App\ex4\Domain\ValueObject\Password
 */
class PasswordTest extends TestCase
{
    /**
     * @var Password $password An instance of "Password" to test.
     */
    private $password;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->password = new Password("1234");
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Password::get
     */
    public function testGet(): void
    {
        $expected = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220';
        $this->assertEquals($expected, $this->password->get());
    }
}
