<?php
declare(strict_types=1);

namespace App\ex4\Domain\Exception;

/**
 * Class LoginAlreadyExists
 * @package App\ex4\Domain\Exception
 */
class LoginAlreadyExists extends \Exception
{
    /**
     * LoginAlreadyExists constructor.
     * Abstracts the exception constructor and set a default message and error code
     */
    public function __construct()
    {
        $message = "Login já está em uso, favor tentar outro!";
        parent::__construct($message, 03, null);
    }
}