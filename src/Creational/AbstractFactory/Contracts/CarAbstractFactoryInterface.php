<?php

namespace PhpDesignPatterns\Creational\AbstractFactory\Contracts;

use PhpDesignPatterns\Creational\AbstractFactory\Cars\BenzCar;
use PhpDesignPatterns\Creational\AbstractFactory\Cars\BMWCar;

interface CarAbstractFactoryInterface
{
    /**
     * initialize new instance of CarAbstractFactory
     * 
     * @param int $price this price of car
     * @return  void
     */
    public function __construct(int $price);

    /**
     * Cretate new car of type BMWCar
     * 
     * @return BMWCar
     */
    public function createBMWCar(): BMWCar;

    /**
     * Cretate new car of type BenzCar
     * 
     * @return BenzCar
     */
    public function createBenzCar(): BenzCar;
}