<?php

namespace PhpDesignPatterns\Creational\AbstractFactory\Cars;

use PhpDesignPatterns\Creational\AbstractFactory\Contracts\CarInterface;

class BMWCar implements CarInterface
{
    /**
     * The price of car.
     * 
     * @var int $price
     */
    protected int $price;

    /**
     * initialize new instance of BMWCar
     * 
     * @param int $price this price of car
     * @return  void
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    /**
     * This for calculate the price of car.
     * 
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->price + 20000;
    }
}