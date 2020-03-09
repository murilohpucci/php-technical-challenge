<?php
declare(strict_types=1);

namespace App\ex2;

/**
 * Class Joaozinho
 * @package App\ex2
 */
class Joaozinho
{
    /**
     * Check if it's time to bite!!
     * @return bool
     */
    public static function foiMordido(): bool
    {
        return (bool) rand(0,1);
    }
}