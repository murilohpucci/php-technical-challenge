<?php

namespace Test\App\ex4\Domain\ValueObject;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\ValueObject\Email;

/**
 * Class EmailTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex4\Domain\ValueObject\Email
 */
class EmailTest extends TestCase
{
    /**
     * @var Email $email An instance of "Email" to test.
     */
    private $email;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe check arguments of this constructor. */
        $this->email = new Email("a string to test");
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Email::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\ValueObject\Email::get
     */
    public function testGet(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
