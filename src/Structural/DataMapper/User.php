<?php

namespace PhpDesignPatterns\Structural\DataMapper;

class User
{
    /**
     * Email of user.
     * 
     * @var striong $email
     */
    private string $email;

    /**
     * Name of user.
     * 
     * @var string $name
     */
    private string $name;

    /**
     * Create user instance.
     * 
     * @param string $email
     * @param string $name
     * 
     * @return void
     */
    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name  = $name;
    }

    /**
     * Set email.
     * 
     * @param sstring $email
     * @return void
     */
    public function setEamail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Get email.
     * 
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set name.
     * 
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get name.
     * 
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Conver to array.
     * 
     * @return array
     */
    public function toArray(): array{
        return [
            'email' => $this->email,
            'name'  => $this->name
        ];
    }
}