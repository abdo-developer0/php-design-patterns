<?php

namespace PhpDesignPatterns\Tests\Structural;

use PhpDesignPatterns\Structural\Adapter\Car;
use PhpDesignPatterns\Structural\Adapter\NormalEngine;
use PhpDesignPatterns\Structural\Adapter\TurboEngine;
use PhpDesignPatterns\Structural\Adapter\TurboEngineAdapter;
use PHPUnit\Framework\TestCase;

class CarTurboEngineAdapterTest extends TestCase
{
    /**
     * It can use NormalEngine.
     * 
     * @test
     * @return void
     */
    public function it_can_use_normal_engine(): void
    {
        $engine = new NormalEngine;

        $car = new Car($engine);

        $this->assertEquals('Normal is started', $car->startEngine(), 'Normal is not started');
    }

    /**
     * It can use TurboEngine.
     * 
     * @test
     * @return void
     */
    public function it_can_use_turbo_engine(): void
    {
        $engine = new TurboEngineAdapter(new TurboEngine);

        $car = new Car($engine);

        $this->assertEquals('Turbo is started', $car->startEngine(), 'Turbo is not started');
    }
}