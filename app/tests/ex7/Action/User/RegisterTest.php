<?php

namespace Test\App\ex7\Action\User;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex7\Action\User\Register;
use Psr\Http\Message\ResponseInterface;

/**
 * Class RegisterTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex7\Action\User\Register
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
        /** @todo Maybe add some arguments to this constructor */
        $this->register = new Register();
    }

    /**
     * @covers \App\ex7\Action\User\Register::action
     */
    public function testAction(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
