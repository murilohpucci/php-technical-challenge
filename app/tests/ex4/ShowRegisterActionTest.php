<?php

namespace Test\App\ex4;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\ShowRegisterAction;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ShowRegisterActionTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex4\ShowRegisterAction
 */
class ShowRegisterActionTest extends TestCase
{
    /**
     * @var ShowRegisterAction $showRegisterAction An instance of "ShowRegisterAction" to test.
     */
    private $showRegisterAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->showRegisterAction = new ShowRegisterAction();
    }

    /**
     * @covers \App\ex4\ShowRegisterAction::action
     */
    public function testAction(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
