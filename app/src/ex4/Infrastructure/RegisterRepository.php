<?php
declare(strict_types=1);

namespace App\ex4\Infrastructure;

use App\ex4\Domain\Register;
use App\ex4\Domain\Repository;

/**
 * Class RegisterRepository
 * @package App\ex4\Infrastructure
 */
class RegisterRepository implements Repository
{
    /**
     * Path where are all registers
     * @var string $registerPath
     */
    protected string $registerPath;

    /**
     * RegisterRepository constructor.
     */
    public function __construct(string $registerPath)
    {
        $this->registerPath = $registerPath;
        if (!file_exists($this->registerPath)) {
            $registerFile = fopen($this->registerPath, 'w');
            fclose($registerFile);
            chmod($this->registerPath, 0644);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function save(Register $register): bool
    {
        $currentData = $this->get();
        $currentData[] = [
            'name' => $register->name(),
            'last_name' => $register->lastName(),
            'email' => $register->email()->get(),
            'telephone' => $register->telephone()->get(),
            'login' => $register->login(),
            'password' => $register->password()->get()
        ];

        $newData = serialize($currentData);
        file_put_contents($this->registerPath, $newData);
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function get(): array
    {
        $serializedData = file_get_contents($this->registerPath);
        $data = unserialize($serializedData);

        if (!$data) {
            return [];
        }

        return array_filter($data);
    }
}