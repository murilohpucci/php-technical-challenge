<?php
declare(strict_types=1);

namespace App\ex4\Domain\ValueObject;

/**
 * Class Password
 * @package App\ex4\Domain\ValueObject
 */
class Password
{
    /**
     * Register password
     * @var string $password
     */
    protected string $password;

    /**
     * Password constructor set the password and encrypt it
     * @param string $password
     */
    public function __construct(string $password)
    {
        $this->password = sha1($password);
    }

    /**
     * Return the register password
     * @return string
     */
    public function get(): string
    {
        return $this->password;
    }

}