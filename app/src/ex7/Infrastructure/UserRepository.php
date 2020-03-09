<?php
declare(strict_types=1);

namespace App\ex7\Infrastructure;

use App\ex7\Domain\User\Entity;
use App\ex7\Domain\User\Repository;

/**
 * Class UserRepository
 * @package App\ex7\Infrastructure
 */
class UserRepository implements Repository
{
    /**
     * Path where are all users will be saved
     * @var string $registerPath
     */
    protected string $registerPath;

    /**
     * UserRepository constructor.
     * @param string $registerPath
     */
    public function __construct(string $registerPath)
    {
        $this->registerPath = $registerPath;
        if (!file_exists($this->registerPath)) {
            $registerFile = fopen($this->registerPath, 'w');
            fclose($registerFile);
            chmod($this->registerPath, 0644);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function save(Entity $user): bool
    {
        $allUsers = $this->getAll();
        $allUsers[] = [
            'name' => $user->name(),
            'last_name' => $user->lastName(),
            'email' => $user->email(),
            'telephone' => $user->telephone()
        ];

        $newUser = serialize($allUsers);
        file_put_contents($this->registerPath, $newUser);
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function update(Entity $user): bool
    {
        $allUsers = $this->getAll();

        foreach ($allUsers as $key => $values) {
            if ($values['email'] == $user->email()) {
                $allUsers[$key] = [
                    'name' => $user->name(),
                    'last_name' => $user->lastName(),
                    'email' => $user->email(),
                    'telephone' => $user->telephone()
                ];
            }
        }

        $newUsers = serialize(array_values($allUsers));
        file_put_contents($this->registerPath, $newUsers);
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function deleteByEmail(string $email): bool
    {
        $allUsers = $this->getAll();

        foreach ($allUsers as $key => $values) {
            if ($values['email'] == $email) {
                unset($allUsers[$key]);
            }
        }

        $newUsers = serialize(array_values($allUsers));
        file_put_contents($this->registerPath, $newUsers);
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getAll(): array
    {
        $serializedData = file_get_contents($this->registerPath);
        $data = unserialize($serializedData);

        if (!$data) {
            return [];
        }

        return array_filter($data);
    }
}