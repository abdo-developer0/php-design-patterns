<?php

namespace PhpDesignPatterns\Creational\AbstractFactory;

use PhpDesignPatterns\Creational\AbstractFactory\Cars\BenzCar;
use PhpDesignPatterns\Creational\AbstractFactory\Cars\BMWCar;
use PhpDesignPatterns\Creational\AbstractFactory\Contracts\CarAbstractFactoryInterface;

class CarAbstractFactory implements CarAbstractFactoryInterface
{
    /**
     * The price of car.
     * 
     * @var int $price
     */
    protected int $price;

    /**
     * The tax of car.
     * 
     * @var int $tax
     */
    protected int $tax = 20000;

    /**
     * initialize new instance of CarAbstractFactory
     * 
     * @param int $price this price of car
     * @return  void
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    /**
     * Cretate new car of type BMWCar
     * 
     * @return BMWCar
     */
    public function createBMWCar(): BMWCar
    {
        return new BMWCar($this->price);
    }

    /**
     * Cretate new car of type BenzCar
     * 
     * @return BenzCar
     */
    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price, $this->tax);
    }
}