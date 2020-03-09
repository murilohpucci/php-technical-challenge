<?php
declare(strict_types=1);

namespace App\Util\Validators;

/**
 * Class Telephone
 * @package App\Util\Validators
 */
class Telephone
{
    /**
     * Check if it's a valid Brazilian telephone
     * EX: (11) 00000-0000 or (11) 0000-0000
     * @param string $telephone
     * @return bool
     */
    public static function isValid(string $telephone): bool
    {
        return (bool) preg_match("/(\([1-9]{2}\)) (?:[2-8]|9[1-9])[0-9]{3}-[0-9]{4}/", $telephone);
    }

}