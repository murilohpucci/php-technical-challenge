<?php

namespace Test\App\Util;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\Util\Action;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Util\CommonResponse;

/**
 * Class ActionTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\Util\Action
 */
class ActionTest extends TestCase
{
    /**
     * @var Action $action An instance of "Action" to test.
     */
    private $action;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->action = $this->getMockBuilder(Action::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
    }

    /**
     * @covers \App\Util\Action::__invoke
     */
    public function testInvoke(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\Util\Action::action
     */
    public function testAction(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\Util\Action::responseJson
     */
    public function testResponseJson(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
