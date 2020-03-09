<?php
declare(strict_types=1);

namespace App\ex7\Domain\User;

/**
 * Interface Repository
 * @package App\ex7\Domain\User
 */
interface Repository
{
    /**
     * Save a user
     * @param Entity $user
     * @return bool
     */
    public function save(Entity $user): bool;

    /**
     * Update a user
     * @param Entity $user
     * @return bool
     */
    public function update(Entity $user): bool;

    /**
     * Delete a user by it's email
     * @param string $email
     * @return bool
     */
    public function deleteByEmail(string $email): bool;

    /**
     * Get user by email
     * @param string $email
     * @return array
     */
    public function get(string $email): array;

    /**
     * Return all users as an array of Users
     * @return array
     */
    public function getAll(): array;
}