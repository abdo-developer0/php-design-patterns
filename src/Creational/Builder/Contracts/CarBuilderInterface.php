<?php

namespace PhpDesignPatterns\Creational\Builder\Contracts;

use PhpDesignPatterns\Creational\Builder\Cars\Car;

interface CarBuilderInterface
{
    /**
     * ACreate The car instance.
     * 
     * @return CarBuilderInterface
     */
    public function createCar() : CarBuilderInterface;

    /**
     * Add engine of the car
     * 
     * @return CarBuilderInterface
     */
    public function addEngine(): CarBuilderInterface;

    /**
     * Add body of the car
     * 
     * @return CarBuilderInterface
     */
    public function addBody(): CarBuilderInterface;

    /**
     * Ad doors of the car
     * 
     * @return CarBuilderInterface
     */
    public function addDoors(): CarBuilderInterface;

    /**
     * Ad wheels of the car
     * 
     * @return CarBuilderInterface
     */
    public function addWheels(): CarBuilderInterface;

    /**
     * Get fainal car.
     * 
     * @return Car
     */
    public function getCar(): Car;
}