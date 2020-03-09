<?php
declare(strict_types=1);

namespace App\ex4\Domain\Exception;

use Throwable;

/**
 * Class InvalidEmail
 * @package App\ex4\Domain\Exception
 */
class InvalidEmail extends \Exception
{
    /**
     * InvalidEmail constructor.
     * Abstracts the exception constructor and set a default message and error code
     */
    public function __construct()
    {
        $message = "Formato do campo e-mail inválido!";
        parent::__construct($message, 01, null);
    }
}