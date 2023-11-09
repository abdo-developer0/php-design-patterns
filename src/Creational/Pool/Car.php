<?php

namespace PhpDesignPatterns\Creational\Pool;

class Car
{
    /**
     * The DateTime of rent at.
     * 
     * @var \DateTime $rentAt
     */
    protected \DateTime $rentAt;

    /**
     * Initialize new instance of Car
     * 
     * @return void
     */
    public function __construct()
    {
        $this->rentAt = new \DateTime();
    }

    /**
     * Move car.
     * 
     * @return string
     */
    public function moveCar(): string
    {
        return "car is moving.";
    }
}