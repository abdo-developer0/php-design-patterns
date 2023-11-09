<?php

namespace PhpDesignPatterns\Tests\Creational;

use PhpDesignPatterns\Creational\SimpleFactory\Car;
use PhpDesignPatterns\Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class CarSimpleFactoryTest extends TestCase
{
    /**
     * It can create a car with simple factory.
     * 
     * @test
     * @return void
     */
    public function it_can_create_a_Car_with_simple_factory(): void

    {
        $carFactory = new CarFactory;

        $car = $carFactory->create('PMW');

        $this->assertInstanceOf(Car::class, $car, "car most be of type Car");
    }
}