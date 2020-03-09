<?php
declare(strict_types=1);

namespace App\Util\Validators;

/**
 * Class Email
 * @package App\Util\Validators
 */
class Email
{
    /**
     * Check if e-mail is valid, case the e-mail is not valid an empty string will be returned
     * @param string $email
     * @return bool
     */
    public static function isValid(string $email): bool
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}