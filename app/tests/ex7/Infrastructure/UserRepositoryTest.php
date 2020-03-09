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
        $this->userRepository = new UserRepository('/tmp/usuarios.txt');
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::save
     */
    public function testSave(): void
    {
        $entity = new Entity('Mario', 'Bros', 'mario.bros@gmail.com', '(11) 94321-1234');
        $this->assertEquals(true, $this->userRepository->save($entity));
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::update
     * @depends testSave
     */
    public function testUpdate(): void
    {
        $entity = new Entity('Joao', 'Silva', 'mario.bros@gmail.com', '(11) 94321-1234');
        $this->assertEquals(true, $this->userRepository->update($entity));
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::getAll
     * @depends testSave
     * @depends testUpdate
     */
    public function testGetAll(): void
    {
        $expected = [
            [
                'name' => 'Joao',
                'last_name' => 'Silva',
                'email' => 'mario.bros@gmail.com',
                'telephone' => '(11) 94321-1234'
            ]
        ];
        $this->assertEquals($expected, $this->userRepository->getAll());
    }

    /**
     * @covers \App\ex7\Infrastructure\UserRepository::deleteByEmail
     * @depends testSave
     * @depends testUpdate
     * @depends testGetAll
     */
    public function testDeleteByEmail(): void
    {
        $this->assertEquals(true, $this->userRepository->deleteByEmail('mario.bros@gmail.com'));
    }

    /**
     * Removes created test file
     */
    public static function tearDownAfterClass(): void
    {
        unlink('/tmp/usuarios.txt');
    }
}
