<?php

namespace Test\App\ex4\Domain;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\Register;
use App\ex4\Domain\ValueObject\Email;
use App\ex4\Domain\ValueObject\Telephone;
use App\ex4\Domain\ValueObject\Password;

/**
 * Class RegisterTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex4\Domain\Register
 */
class RegisterTest extends TestCase
{
    /**
     * @var Register $register An instance of "Register" to test.
     */
    private $register;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe check arguments of this constructor. */
        $this->register = new Register("a string to test", "a string to test", $this->createMock(Email::class), $this->createMock(Telephone::class), "a string to test", $this->createMock(Password::class));
    }

    /**
     * @covers \App\ex4\Domain\Register::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\Register::name
     */
    public function testName(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\Register::lastName
     */
    public function testLastName(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\Register::email
     */
    public function testEmail(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\Register::telephone
     */
    public function testTelephone(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\Register::login
     */
    public function testLogin(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\Register::password
     */
    public function testPassword(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
