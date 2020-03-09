<?php
declare(strict_types=1);

namespace App\ex4\Domain\ValueObject;

use App\ex4\Domain\Exception\InvalidEmail;
use App\Util\Validators\Email as EmailValidator;

/**
 * Class Email
 * @package App\ex4\Domain\ValueObject
 */
class Email
{
    /**
     * @var string $email Register Email
     */
    protected string $email;

    /**
     * Email constructor build email and check if it's valid
     * @param string $email
     * @throws InvalidEmail
     */
    public function __construct(string $email)
    {
        if (!EmailValidator::isValid($email)) {
            throw new InvalidEmail();
        }
        $this->email = $email;
    }

    /**
     * Returns the e-mail string
     * @return string
     */
    public function get(): string
    {
        return $this->email;
    }
}