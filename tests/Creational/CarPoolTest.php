<?php

namespace PhpDesignPatterns\Tests\Creational;

use PhpDesignPatterns\Creational\Pool\Car;
use PhpDesignPatterns\Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class CarPoolTest extends TestCase
{
    /**
     * The CarPool instance.
     * 
     * @var CarPool $carPool
     */
    protected CarPool $carPool;

    /**
     * Set up env.
     * 
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->carPool = new CarPool;
    }

    /**
     * It can rent a car.
     * 
     * @test
     * @return void
     */
    public function it_can_rent_a_car(): void
    {
        $car = $this->carPool->rentCar();

        $this->assertInstanceOf(Car::class, $car, "most be of type Car");

        $this->assertEquals(1, $this->carPool->getBusyCount(), "count most be 1");
    }

    /**
     * It can free a car.
     * 
     * @test
     * @return void
     */
    public function it_can_free_a_car(): void
    {
        $carOne = $this->carPool->rentCar();
        $carTwo = $this->carPool->rentCar();
        $this->assertEquals(0, $this->carPool->getFreeCount(), "count most be 0");
        $this->assertEquals(2, $this->carPool->getInstancesCount(), "count most be 2");

        $this->carPool->freeCar($carTwo);
        $this->assertEquals(1, $this->carPool->getFreeCount(), "count most be 1");
        $this->assertEquals(1, $this->carPool->getBusyCount(), "count most be 1");
        $this->assertEquals(2, $this->carPool->getInstancesCount(), "count most be 2");
    }
}