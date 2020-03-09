<?php

namespace Test\App\ex7\Action\User;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex7\Action\User\Update;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UpdateTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex7\Action\User\Update
 */
class UpdateTest extends TestCase
{
    /**
     * @var Update $update An instance of "Update" to test.
     */
    private $update;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->update = new Update();
    }

    /**
     * @covers \App\ex7\Action\User\Update::action
     */
    public function testAction(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
