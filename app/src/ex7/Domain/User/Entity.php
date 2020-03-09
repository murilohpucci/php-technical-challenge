<?php
declare(strict_types=1);

namespace App\ex7\Domain\User;

/**
 * Class Entity
 * @package App\ex7\Domain\User
 */
class Entity
{
    /**
     * User name
     * @var string $name
     */
    protected string $name;

    /**
     * User last name
     * @var string $lastName
     */
    protected string $lastName;

    /**
     * User email
     * @var string $email
     */
    protected string $email;

    /**
     * User telephone
     * @var string $telephone
     */
    protected string $telephone;

    /**
     * Entity constructor.
     * @param string $name
     * @param string $lastName
     * @param string $email
     * @param string $telephone
     */
    public function __construct(string $name, string $lastName, string $email, string $telephone)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function lastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function telephone(): string
    {
        return $this->telephone;
    }

}