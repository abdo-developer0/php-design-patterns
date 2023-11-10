<?php

namespace PhpDesignPatterns\Structural\Bridge;

use PhpDesignPatterns\Structural\Bridge\Contracts\CarColor;

abstract class Car
{
    /**
     * The implementation  of color geter.
     * 
     * @var CarColor $carColor
     */
    protected CarColor $carColor;

    /**
     * Made yer.
     * 
     * @var int $year
     */
    protected int $year;

    /**
     * Abstract constructor.
     * 
     * @param CarColor $carColor
     * @param int $year
     * 
     * @return void
     */
    public function __construct(CarColor $color, int $year)
    {
        $this->carColor = $color;
        $this->year = $year;
    }

    /**
     * Get color from implementation.
     * 
     * @return string of color.
     */
    public function getColor(): string
    {
        return $this->carColor->getColor();
    }

    /**
     * Get made year.
     * 
     * @return int of car made year.
     */
    public function getMadeYear(): int
    {
        return $this->year;
    }

    /**
     * Get product name.
     * 
     * @return string of car name.
     */
    abstract public function getProduct(): string;

    /**
     * Implement this for calcolate price of car.
     * 
     * @return int
     */
    abstract public function calcolatePrice(): int;
}