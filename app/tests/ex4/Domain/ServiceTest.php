<?php

namespace Test\App\ex4\Domain;

use App\ex4\Domain\Exception\EmailAlreadyExists;
use App\ex4\Domain\Exception\LoginAlreadyExists;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex4\Domain\Service;
use App\ex4\Domain\Repository;

/**
 * Class ServiceTest.
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
        $repository = $this->createMock(Repository::class);
        $repository->method('save')->willReturn(true);
        $repository->method('get')->willReturn([
            [
                'name' => 'João',
                'last_name' => 'Silva',
                'email' => 'joao.silva@gmail.com',
                'telephone' => '(11) 91234-4321',
                'login' => 'abc',
                'password' => '40bd001563085fc35165329ea1ff5c5ecbdbbeef'
            ],
            [
                'name' => 'Maria',
                'last_name' => 'Pontes',
                'email' => 'maria.pontes@gmail.com',
                'telephone' => '(11) 91234-4321',
                'login' => 'def',
                'password' => '40bd001563085fc35165329ea1ff5c5ecbdbbeef'
            ],
            [
                'name' => 'Mario',
                'last_name' => 'Bros',
                'email' => 'mario.bros@gmail.com',
                'telephone' => '(19) 91234-4321',
                'login' => 'ghi',
                'password' => '40bd001563085fc35165329ea1ff5c5ecbdbbeef'
            ]
        ]);

        $this->service = new Service($repository);
    }

    /**
     * Tests if login already exists
     * @covers \App\ex4\Domain\Service::register
     */
    public function testRegisterLoginAlreadyExists(): void
    {
        $this->expectException(LoginAlreadyExists::class);
        $data = [
            'ex4-name' => 'Jonas',
            'ex4-lastname' => 'Pereira',
            'ex4-email' => 'jonas.pereira@gmail.com',
            'ex4-telephone' => '(11) 91234-4321',
            'ex4-login' => 'def',
            'ex4-password' => '40bd001563085fc35165329ea1ff5c5ecbdbbeef'
        ];
        $this->service->register($data);
    }

    /**
     * Test if e-mail is already registered
     * @covers \App\ex4\Domain\Service::register
     */
    public function testRegisterEmailAlreadyExists(): void
    {
        $this->expectException(EmailAlreadyExists::class);
        $data = [
            'ex4-name' => 'Jonas',
            'ex4-lastname' => 'Pereira',
            'ex4-email' => 'mario.bros@gmail.com',
            'ex4-telephone' => '(11) 91234-4321',
            'ex4-login' => 'jkl',
            'ex4-password' => '40bd001563085fc35165329ea1ff5c5ecbdbbeef'
        ];
        $this->service->register($data);
    }
}
