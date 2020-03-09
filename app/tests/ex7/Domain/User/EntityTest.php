<?php

namespace Test\App\ex7\Domain\User;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex7\Domain\User\Entity;

/**
 * Class EntityTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\ex7\Domain\User\Entity
 */
class EntityTest extends TestCase
{
    /**
     * @var Entity $entity An instance of "Entity" to test.
     */
    private $entity;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe check arguments of this constructor. */
        $this->entity = new Entity("a string to test", "a string to test", "a string to test", "a string to test");
    }

    /**
     * @covers \App\ex7\Domain\User\Entity::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Entity::name
     */
    public function testName(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Entity::lastName
     */
    public function testLastName(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Entity::email
     */
    public function testEmail(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex7\Domain\User\Entity::telephone
     */
    public function testTelephone(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
