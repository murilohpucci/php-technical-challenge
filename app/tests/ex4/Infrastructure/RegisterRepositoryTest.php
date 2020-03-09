<?php

namespace Test\App\ex4\Infrastructure;

use App\ex4\Domain\ValueObject\Email;
use App\ex4\Domain\ValueObject\Password;
use App\ex4\Domain\ValueObject\Telephone;
use PHPUnit\Framework\TestCase;
use App\ex4\Infrastructure\RegisterRepository;
use App\ex4\Domain\Register;

/**
 * Class RegisterRepositoryTest.
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
        $this->registerRepository = new RegisterRepository('/tmp/registros.txt');
    }

    /**
     * @covers \App\ex4\Infrastructure\RegisterRepository::save
     */
    public function testSave(): void
    {
        $email = new Email('mario.bros@gmail.com');
        $telephone = new Telephone('(19) 91234-4321');
        $password = new Password('123');
        $tmpRegister = new Register('Mario', 'Bros', $email,$telephone, 'ghi', $password);
        $this->assertEquals(true, $this->registerRepository->save($tmpRegister));
    }

    /**
     * @covers \App\ex4\Infrastructure\RegisterRepository::get
     * @depends testSave
     */
    public function testGet(): void
    {
        $expect = [
            [
                'name' => 'Mario',
                'last_name' => 'Bros',
                'email' => 'mario.bros@gmail.com',
                'telephone' => '(19) 91234-4321',
                'login' => 'ghi',
                'password' => '40bd001563085fc35165329ea1ff5c5ecbdbbeef'
            ]
        ];
        $this->assertEquals($expect, $this->registerRepository->get());
    }

    /**
     * Removes created test file
     */
    public static function tearDownAfterClass(): void
    {
        unlink('/tmp/registros.txt');
    }
}
