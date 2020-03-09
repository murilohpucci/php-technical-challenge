<?php

namespace Test\App\ex7\Action\User;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex7\Action\User\Show;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ShowTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex7\Action\User\Show
 */
class ShowTest extends TestCase
{
    /**
     * @var Show $show An instance of "Show" to test.
     */
    private $show;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->show = new Show();
    }

    /**
     * @covers \App\ex7\Action\User\Show::action
     */
    public function testAction(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
