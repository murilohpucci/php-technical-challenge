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
     * @var Telephone $telephone An instance of "Telephone" to test.
     */
    private $telephone;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->telephone = new Telephone();
    }

    /**
     * @covers \App\Util\Validators\Telephone::isValid
     */
    public function testIsValid(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
