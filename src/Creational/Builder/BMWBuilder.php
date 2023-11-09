<?php

namespace PhpDesignPatterns\Creational\Builder;

use PhpDesignPatterns\Creational\Builder\Cars\BMWCar;
use PhpDesignPatterns\Creational\Builder\Cars\Car;
use PhpDesignPatterns\Creational\Builder\Contracts\CarBuilderInterface;

class BMWBuilder implements CarBuilderInterface
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
     * @return BMWBuilder
     */
    public function createCar() : BMWBuilder
    {
        $this->car = new BMWCar;
        return $this;
    }

    /**
     * Add engine of the car
     * 
     * @return BMWBuilder
     */
    public function addEngine(): BMWBuilder
    {
        $this->car->setAttribute('engine', "tarbo");
        return  $this;
    }

    /**
     * Add body of the car
     * 
     * @return BMWBuilder
     */
    public function addBody(): BMWBuilder
    {
        $this->car->setAttribute('body', "blastic");
        return $this;
    }

    /**
     * Ad doors of the car
     * 
     * @return BMWBuilder
     */
    public function addDoors(): BMWBuilder
    {
        $this->car->setAttribute('doors', 4);
        return $this;
    }

    /**
     * Ad wheels of the car
     * 
     * @return BMWBuilder
     */
    public function addWheels(): BMWBuilder
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