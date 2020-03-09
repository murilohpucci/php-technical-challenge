<?php

namespace Test\App\ex7\Action\User;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex7\Action\User\Delete;
use Psr\Http\Message\ResponseInterface;

/**
 * Class DeleteTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex7\Action\User\Delete
 */
class DeleteTest extends TestCase
{
    /**
     * @var Delete $delete An instance of "Delete" to test.
     */
    private $delete;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->delete = new Delete();
    }

    /**
     * @covers \App\ex7\Action\User\Delete::action
     */
    public function testAction(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
