<?php

namespace PhpDesignPatterns\Creational\AbstractFactory\Contracts;

interface CarInterface
{
    /**
     * This for calculate the price of car.
     * 
     * @return int
     */
    public function calculatePrice(): int;
}