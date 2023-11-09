<?php

namespace PhpDesignPatterns\Creational\Builder;

use PhpDesignPatterns\Creational\Builder\Cars\BenzCar;
use PhpDesignPatterns\Creational\Builder\Cars\Car;
use PhpDesignPatterns\Creational\Builder\Contracts\CarBuilderInterface;

class BenzBuilder implements CarBuilderInterface
{
    /**
     * The Car instance.
     * 
     * @var Car $car
     */
    protected Car $car;

    /**
     * ACreate The car instance.
     * 
     * @return BenzBuilder
     */
    public function createCar() : BenzBuilder
    {
        $this->car = new BenzCar;
        return $this;
    }

    /**
     * Add engine of the car
     * 
     * @return BenzBuilder
     */
    public function addEngine(): BenzBuilder
    {
        $this->car->setAttribute('engine', "tarbo");
        return  $this;
    }

    /**
     * Add body of the car
     * 
     * @return BenzBuilder
     */
    public function addBody(): BenzBuilder
    {
        $this->car->setAttribute('body', "blastic");
        return $this;
    }

    /**
     * Ad doors of the car
     * 
     * @return BenzBuilder
     */
    public function addDoors(): BenzBuilder
    {
        $this->car->setAttribute('doors', 4);
        return $this;
    }

    /**
     * Ad wheels of the car
     * 
     * @return BenzBuilder
     */
    public function addWheels(): BenzBuilder
    {
        $this->car->setAttribute('wheels', 8);
        return $this;
    }

    /**
     * Get fainal car.
     * 
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->car;
    }
}