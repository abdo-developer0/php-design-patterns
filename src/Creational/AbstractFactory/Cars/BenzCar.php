<?php

namespace PhpDesignPatterns\Creational\AbstractFactory\Cars;

use PhpDesignPatterns\Creational\AbstractFactory\Contracts\CarInterface;

class BenzCar implements CarInterface
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
    protected int $tax;

    /**
     * initialize new instance of BenzCar
     * 
     * @param int $price this price of car
     * @param int $tax this tax of car
     * @return  void
     */
    public function __construct(int $price, int $tax)
    {
        $this->price = $price;

        $this->tax = $tax;
    }

    /**
     * This for calculate the price of car.
     * 
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->price + $this->tax + 100000;
    }
}