<?php

namespace PhpDesignPatterns\Structural\DataMapper;

use PhpDesignPatterns\Structural\DataMapper\Contracts\DBManagerInterface;

class UserRepository
{
    /**
     * The storate manager.
     * 
     * @var DBManagerInterface $manager
     */
    protected DBManagerInterface $manager;

    /**
     * Initialize repo.
     * 
     * @param DBManagerInterface $manager
     * @return void
     */
    public function __construct(DBManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    /**
     * create user item in array db.
     * 
     * @param User $user
     * @return User
     */
    public function create(User $user): User
    {
        $this->manager->insert($user->toArray());
        return $user;
    }

    /**
     * Get all items form array db and convert it to objects.
     * 
     * @return array<User>
     */
    public function getAll(): array
    {
        $users = [];

        foreach ($this->manager->all() as $item) {
            $users[] = new User(
                $item['email'],
                $item['name']
            );
        }

        return $users;
    }

    /**
     * Find one by value of email.
     * 
     * @param mixed $value of email
     * @return ?User
     */
    public function findOne(mixed $value): ?User
    {
        $item = $this->manager->find('email', $value);

        if ($item) {
            return new User(
                $item['email'],
                $item['name']
            );
        }

        return null;
    }

    /**
     * Update one using value of email.
     * 
     * @param mixed $value of email
     * @param User $user updated user 
     * 
     * @return bool status
     */
    public function update(mixed $value, User $user): bool
    {
        return $this->manager->update('email', $value, $user->toArray());
    }

    /**
     * Delete one using value of email.
     * 
     * @param mixed $value of email.
     * @return bool status.
     */
    public function delete(mixed $value): bool
    {
        return $this->manager->delete('email', $value);
    }
}