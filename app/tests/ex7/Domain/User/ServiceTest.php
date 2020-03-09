<?php

namespace Test\App\ex7\Domain\User;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex7\Domain\User\Service;
use App\ex7\Domain\User\Repository;
use App\Util\CommonResponse;

/**
 * Class ServiceTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex7\Domain\User\Service
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
     * @covers \App\ex7\Domain\User\Service::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Service::register
     */
    public function testRegister(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Service::show
     */
    public function testShow(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Service::delete
     */
    public function testDelete(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Service::update
     */
    public function testUpdate(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Service::validateCommonPostPutData
     */
    public function testValidateCommonPostPutData(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
