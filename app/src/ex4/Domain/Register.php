<?php
declare(strict_types=1);

namespace App\ex4\Domain;

use App\ex4\Domain\ValueObject\Email;
use App\ex4\Domain\ValueObject\Password;
use App\ex4\Domain\ValueObject\Telephone;

/**
 * Class Register
 * @package App\ex4\Domain
 */
class Register
{
    /**
     * Register name
     * @var string $name
     */
    protected string $name;

    /**
     * Register last name
     * @var string $lastName
     */
    protected string $lastName;

    /**
     * Register e-mail
     * @var Email $email
     */
    protected Email $email;

    /**
     * Register Telephone
     * @var Telephone $telephone
     */
    protected Telephone $telephone;

    /**
     * Register Login
     * @var string $login
     */
    protected string $login;

    /**
     * Register password
     * @var Password
     */
    protected Password $password;

    /**
     * Register constructor.
     * @param string $name
     * @param string $lastName
     * @param Email $email
     * @param Telephone $telephone
     * @param string $login
     * @param Password $password
     */
    public function __construct(string $name, string $lastName, Email $email, Telephone $telephone, string $login, Password $password)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * Returns register name
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Returns register last name
     * @return string
     */
    public function lastName(): string
    {
        return $this->lastName;
    }

    /**
     * Returns register email
     * @return Email
     */
    public function email(): Email
    {
        return $this->email;
    }

    /**
     * Returns register telephone
     * @return Telephone
     */
    public function telephone(): Telephone
    {
        return $this->telephone;
    }

    /**
     * Returns register login
     * @return string
     */
    public function login(): string
    {
        return $this->login;
    }

    /**
     * Returns register password
     * @return Password
     */
    public function password(): Password
    {
        return $this->password;
    }

}