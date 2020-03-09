<?php

namespace Test\App\ex4\Domain;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\Service;
use App\ex4\Domain\Repository;

/**
 * Class ServiceTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex4\Domain\Service
 */
class ServiceTest extends TestCase
{
    /**
     * @var Service $service An instance of "Service" to test.
     */
    private $service;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe check arguments of this constructor. */
        $this->service = new Service($this->createMock(Repository::class));
    }

    /**
     * @covers \App\ex4\Domain\Service::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\Service::register
     */
    public function testRegister(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Domain\Service::all
     */
    public function testAll(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
