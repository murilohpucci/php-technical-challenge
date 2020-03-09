<?php

namespace Test\App\ex4\Infrastructure;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\Infrastructure\RegisterRepository;
use App\ex4\Domain\Register;

/**
 * Class RegisterRepositoryTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex4\Infrastructure\RegisterRepository
 */
class RegisterRepositoryTest extends TestCase
{
    /**
     * @var RegisterRepository $registerRepository An instance of "RegisterRepository" to test.
     */
    private $registerRepository;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->registerRepository = new RegisterRepository();
    }

    /**
     * @covers \App\ex4\Infrastructure\RegisterRepository::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Infrastructure\RegisterRepository::save
     */
    public function testSave(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex4\Infrastructure\RegisterRepository::get
     */
    public function testGet(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
