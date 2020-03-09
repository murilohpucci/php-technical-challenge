<?php
declare(strict_types=1);

namespace App\ex4\Domain;


use App\ex4\Domain\Exception\EmailAlreadyExists;
use App\ex4\Domain\Exception\LoginAlreadyExists;
use App\ex4\Domain\ValueObject\Email;
use App\ex4\Domain\ValueObject\Password;
use App\ex4\Domain\ValueObject\Telephone;

/**
 * Class Service
 * @package App\ex4\Domain
 */
class Service
{
    /**
     * Register repository
     * @var Repository $repository
     */
    protected Repository $repository;

    /**
     * Service constructor.
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Saves a register
     * @param array $data
     * @return bool
     * @throws EmailAlreadyExists
     * @throws Exception\InvalidEmail
     * @throws Exception\InvalidTelephone
     * @throws LoginAlreadyExists
     */
    public function register(array $data): bool
    {
        $email = new Email($data['ex4-email']);
        $password = new Password($data['ex4-password']);
        $telephone = new Telephone($data['ex4-telephone']);

        $newRegister = new Register($data['ex4-name'], $data['ex4-lastname'], $email, $telephone, $data['ex4-login'], $password);
        $allRegisters = $this->repository->get();
        $registeredEmails = [];
        $registeredLogins = [];

        if (!empty($allRegisters)) {
            foreach ($allRegisters as $register) {
                $registeredEmails[] = $register['email'];
                $registeredLogins[] = $register['login'];
            }
        }

        if (in_array($newRegister->login(), $registeredLogins)) {
            throw new LoginAlreadyExists();
        }

        if (in_array($newRegister->email()->get(), $registeredEmails)) {
            throw new EmailAlreadyExists();
        }

        return $this->repository->save($newRegister);
    }

    /**
     * Return all registers on file
     * @return array
     */
    public function all(): array
    {
        return $this->repository->get();
    }
}