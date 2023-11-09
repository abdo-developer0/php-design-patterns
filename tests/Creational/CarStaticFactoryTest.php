<?php

namespace PhpDesignPatterns\Tests\Creational;

use PhpDesignPatterns\Creational\StaticFactory\Car;
use PhpDesignPatterns\Creational\StaticFactory\CarStaticFactory;
use PHPUnit\Framework\TestCase;

class CarStaticFactoryTest extends TestCase
{
    /**
     * It can create a car with static factory.
     * 
     * @test
     * @return void
     */
    public function it_can_create_a_Car_with_static_factory(): void

    {
        $car = CarStaticFactory::factory('PMW');

        $this->assertInstanceOf(Car::class, $car, "car most be of type Car");

        $this->assertEquals('PMW', $car->getType());
    }
}