<?php

namespace PhpDesignPatterns\Tests\Creational;

use PhpDesignPatterns\Creational\ProtoType\AutomaticCarProtoType;
use PhpDesignPatterns\Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class CarProtoTypeTest extends TestCase
{
    /**
     * It can create automatic cars with clone.
     * 
     * @test
     * @return void
     */
    public function it_can_create_automatic_cars_with_clone(): void
    {
        $carProtoType = new AutomaticCarProtoType;

        for($index = 0; $index < 10; $index += 1) {
            $newCAr = clone $carProtoType;

            $this->assertInstanceOf(AutomaticCarProtoType::class, $newCAr, '$newCar most be of type AutomaticCarProtoType');
        }
    }

    /**
     * It can create manual cars with clone.
     * 
     * @test
     * @return void
     */
    public function it_can_create_manual_cars_with_clone(): void
    {
        $carProtoType = new ManualCarProtoType;

        for($index = 0; $index < 10; $index += 1) {
            $newCAr = clone $carProtoType;

            $this->assertInstanceOf(ManualCarProtoType::class, $newCAr, '$newCar most be of type ManualCarProtoType');
        }
    }
}