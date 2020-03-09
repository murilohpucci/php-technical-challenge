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
     * @var Email $email An instance of "Email" to test.
     */
    private $email;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->email = new Email();
    }

    /**
     * @covers \App\Util\Validators\Email::isValid
     */
    public function testIsValid(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
