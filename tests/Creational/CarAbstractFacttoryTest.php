<?php

namespace PhpDesignPatterns\Tests\Creational;

use PhpDesignPatterns\Creational\AbstractFactory\CarAbstractFactory;
use PhpDesignPatterns\Creational\AbstractFactory\Cars\BenzCar;
use PhpDesignPatterns\Creational\AbstractFactory\Cars\BMWCar;
use PHPUnit\Framework\TestCase;

class CarAbstractFacttoryTest extends TestCase
{
    /**
     * It can create BMWCar
     * 
     * @test
     * @return void
     */
    public function it_can_create_a_bmw_car(): void
    {
        $carAbstractFactory = new CarAbstractFactory(200000);

        $car = $carAbstractFactory->createBMWCar();

        $this->assertInstanceOf(BMWCar::class, $car, "car most be of type BMWCar");
    }

    /**
     * It can create BenzCar
     * 
     * @test
     * @return void
     */
    public function it_can_create_a_benz_car(): void
    {
        $carAbstractFactory = new CarAbstractFactory(200000);

        $car = $carAbstractFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class, $car, "car most be of type BenzCar");
    }
}