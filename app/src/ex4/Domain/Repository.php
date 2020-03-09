<?php
declare(strict_types=1);

namespace App\ex4\Domain;

/**
 * Interface Register Repository
 * @package App\ex4\Domain\ValueObject
 */
interface Repository
{
    /**
     * Save the register
     * @param Register $register
     * @return bool
     */
    public function save(Register $register): bool;

    /**
     * Get all registers
     * @return array of Register
     */
    public function get(): array;
}