<?php
declare(strict_types=1);

namespace App\ex4\Domain\Exception;

/**
 * Class EmailAlreadyExists
 * @package App\ex4\Domain\Exception
 */
class EmailAlreadyExists extends \Exception
{
    /**
     * EmailAlreadyExists constructor.
     * Abstracts the exception constructor and set a default message and error code
     */
    public function __construct()
    {
        $message = "E-mail já está em uso, favor tentar outro!";
        parent::__construct($message, 04, null);
    }
}