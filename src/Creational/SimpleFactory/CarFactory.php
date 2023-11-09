<?php

namespace PhpDesignPatterns\Creational\SimpleFactory;

class CarFactory
{
    /**
     * Simple factory create for Car.
     * 
     * @param string $carType The type of target creation car.
     * @return Car The Created car.
     */
    public function create(string $carType): Car
    {
        return new Car($carType);
    }
}