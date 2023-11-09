<?php

namespace PhpDesignPatterns\Tests\Creational;

use PhpDesignPatterns\Creational\FactoryMethod\BenzBrandFactory;
use PhpDesignPatterns\Creational\FactoryMethod\BMWBrandFactory;
use PhpDesignPatterns\Creational\FactoryMethod\Brands\BenzBrand;
use PhpDesignPatterns\Creational\FactoryMethod\Brands\BMWBrand;
use PHPUnit\Framework\TestCase;

class CarBrandFactoryMethodTest extends TestCase
{
    /**
     * It can build BMWBrand.
     * 
     * @test
     * @return void
     */
    public function it_can_build_bmw_car(): void
    {
        $brandFactory = new BMWBrandFactory;

        $brand = $brandFactory->BuildBrand();


        $this->assertInstanceOf(BMWBrand::class, $brand, "most be of type BMWBrand");
    }

    /**
     * It can build BenzBrand.
     * 
     * @test
     * @return void
     */
    public function it_can_build_benz_car(): void
    {
        $brandFactory = new BenzBrandFactory;

        $brand = $brandFactory->BuildBrand();


        $this->assertInstanceOf(BenzBrand::class, $brand, "most be of type BenzBrand");
    }
}