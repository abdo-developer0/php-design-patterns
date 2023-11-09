<?php

namespace PhpDesignPatterns\Creational\StaticFactory;

class Car
{
    /**
     * The type of car.
     * 
     * @var string $type
     */
    protected string $type;

    /**
     * Get the car type.
     * 
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


    /**
     * Initialize new CAr instance.
     * 
     * @param string $type The type of car.
     * @return void
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }
}