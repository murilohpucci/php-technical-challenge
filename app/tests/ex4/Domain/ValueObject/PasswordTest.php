<?php

namespace Test\App\ex4\Domain\ValueObject;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\ValueObject\Password;

/**
 * Class PasswordTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
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
        /** @todo Maybe check arguments of this constructor. */
        $this->password = new Password("a string to test");
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Password::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Password::get
     */
    public function testGet(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
