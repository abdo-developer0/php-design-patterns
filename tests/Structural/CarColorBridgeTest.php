<?php

namespace PhpDesignPatterns\Tests\Structural;

use PhpDesignPatterns\Structural\Bridge\BenzCar;
use PhpDesignPatterns\Structural\Bridge\BMWCar;
use PhpDesignPatterns\Structural\Bridge\Colors\BlackCar;
use PhpDesignPatterns\Structural\Bridge\Colors\BlueCar;
use PhpDesignPatterns\Structural\Bridge\Colors\RedCar;
use PHPUnit\Framework\TestCase;

class CarColorBridgeTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function it_can_create_tree_colors_of_BMW(): void
    {
        $blackCar = new BMWCar(new BlackCar, 2023);
        $this->assertEquals('BMW', $blackCar->getProduct());
        $this->assertEquals(2000000, $blackCar->calcolatePrice());
        $this->assertEquals('black', $blackCar->getColor());
        $this->assertEquals(2023, $blackCar->getMadeYear());

        $redCar = new BMWCar(new RedCar, 2023);
        $this->assertEquals('BMW', $redCar->getProduct());
        $this->assertEquals(2000000, $redCar->calcolatePrice());
        $this->assertEquals('red', $redCar->getColor());
        $this->assertEquals(2023, $redCar->getMadeYear());

        $blueCar = new BMWCar(new BlueCar, 2023);
        $this->assertEquals('BMW', $blueCar->getProduct());
        $this->assertEquals(2000000, $blueCar->calcolatePrice());
        $this->assertEquals('blue', $blueCar->getColor());
        $this->assertEquals(2023, $blueCar->getMadeYear());
    }

    /**
     * @test
     * @return void
     */
    public function it_can_create_tree_colors_of_Benz(): void
    {
        $blackCar = new BenzCar(new BlackCar, 2023);
        $this->assertEquals('Benz', $blackCar->getProduct());
        $this->assertEquals(3000000, $blackCar->calcolatePrice());
        $this->assertEquals('black', $blackCar->getColor());
        $this->assertEquals(2023, $blackCar->getMadeYear());

        $redCar = new BenzCar(new RedCar, 2023);
        $this->assertEquals('Benz', $redCar->getProduct());
        $this->assertEquals(3000000, $redCar->calcolatePrice());
        $this->assertEquals('red', $redCar->getColor());
        $this->assertEquals(2023, $redCar->getMadeYear());

        $blueCar = new BenzCar(new BlueCar, 2023);
        $this->assertEquals('Benz', $blueCar->getProduct());
        $this->assertEquals(3000000, $blueCar->calcolatePrice());
        $this->assertEquals('blue', $blueCar->getColor());
        $this->assertEquals(2023, $blueCar->getMadeYear());
    }
}