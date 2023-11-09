<?php

namespace PhpDesignPatterns\Creational\StaticFactory;

class CarStaticFactory
{
    /**
     * Simple factory create for Car.
     * 
     * @param string $carType The type of target creation car.
     * @return Car The Created car.
     */
    public static function factory(string $carType): Car
    {
        return new Car($carType);
    }
}