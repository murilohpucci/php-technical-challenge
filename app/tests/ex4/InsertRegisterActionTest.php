<?php

namespace Test\App\ex4;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\InsertRegisterAction;
use Psr\Http\Message\ResponseInterface;

/**
 * Class InsertRegisterActionTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex4\InsertRegisterAction
 */
class InsertRegisterActionTest extends TestCase
{
    /**
     * @var InsertRegisterAction $insertRegisterAction An instance of "InsertRegisterAction" to test.
     */
    private $insertRegisterAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->insertRegisterAction = new InsertRegisterAction();
    }

    /**
     * @covers \App\ex4\InsertRegisterAction::action
     */
    public function testAction(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\InsertRegisterAction::validatePostData
     */
    public function testValidatePostData(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
