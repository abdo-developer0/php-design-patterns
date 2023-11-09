<?php

namespace PhpDesignPatterns\Creational\SimpleFactory;

class Car
{
    /**
     * The type of car.
     * 
     * @var string $type
     */
    protected string $type;


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