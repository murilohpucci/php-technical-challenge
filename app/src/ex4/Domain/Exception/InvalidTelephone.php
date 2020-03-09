<?php
declare(strict_types=1);

namespace App\ex4\Domain\Exception;

use Throwable;

/**
 * Class InvalidTelephone
 * @package App\ex4\Domain\Exception
 */
class InvalidTelephone extends \Exception
{
    /**
     * InvalidTelephone constructor.
     * Abstracts the exception constructor and set a default message and error code
     */
    public function __construct()
    {
        $message = "Formato do campo telefone inválido!";
        parent::__construct($message, 02, null);
    }
}