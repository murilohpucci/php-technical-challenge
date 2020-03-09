<?php

namespace Test\App\ex7\Infrastructure;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex7\Infrastructure\UserRepository;
use App\ex7\Domain\User\Entity;

/**
 * Class UserRepositoryTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex7\Infrastructure\UserRepository
 */
class UserRepositoryTest extends TestCase
{
    /**
     * @var UserRepository $userRepository An instance of "UserRepository" to test.
     */
    private $userRepository;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->userRepository = new UserRepository();
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::save
     */
    public function testSave(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::update
     */
    public function testUpdate(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::deleteByEmail
     */
    public function testDeleteByEmail(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::get
     */
    public function testGet(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::getAll
     */
    public function testGetAll(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
