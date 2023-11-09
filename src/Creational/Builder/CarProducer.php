<?php

namespace PhpDesignPatterns\Creational\Builder;

use PhpDesignPatterns\Creational\Builder\Cars\Car;
use PhpDesignPatterns\Creational\Builder\Contracts\CarBuilderInterface;

class CarProducer
{
    /**
     * The car builder.
     * 
     * @var CarBuilderInterface $builder
     */
    protected CarBuilderInterface $builder;

    /**
     * Initialize producer for build the car.
     * 
     * @return void
     */
    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Produce the car.
     * 
     * @return Car
     */
    public function produce(): Car
    {
        return $this->builder
                    ->createCar()
                    ->addBody()
                    ->addEngine()
                    ->addDoors()
                    ->addWheels()
                    ->getCar();
    }
}