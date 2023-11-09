<?php

namespace PhpDesignPatterns\Tests\Creational;

use PhpDesignPatterns\Creational\Builder\BenzBuilder;
use PhpDesignPatterns\Creational\Builder\BMWBuilder;
use PhpDesignPatterns\Creational\Builder\CarProducer;
use PhpDesignPatterns\Creational\Builder\Cars\BenzCar;
use PhpDesignPatterns\Creational\Builder\Cars\BMWCar;
use PHPUnit\Framework\TestCase;

class CarBuilderTest extends TestCase
{
    /**
     * It can produce BMWCar
     * 
     * @test
     * @return void
     */
    public function it_can_produce_bmw_car(): void
    {
        $builder = new BMWBuilder;

        $producer = new CarProducer($builder);

        $car = $producer->produce();

        $this->assertInstanceOf(BMWCar::class, $car, "most be of type BMWCar");
    }

    /**
     * It can produce BenzCar
     * 
     * @test
     * @return void
     */
    public function it_can_produce_benz_car(): void
    {
        $builder = new BenzBuilder;

        $producer = new CarProducer($builder);

        $car = $producer->produce();

        $this->assertInstanceOf(BenzCar::class, $car, "most be of type BenzCar");
    }
}