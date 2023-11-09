<?php

namespace PhpDesignPatterns\Creational\FactoryMethod\Brands;

use PhpDesignPatterns\Creational\FactoryMethod\Contracts\CarBrandInterface;

class BMWBrand implements CarBrandInterface
{
    /**
     * Create brand.
     * 
     * @return string
     */
    public function createBrand(): string
    {
        return "BMW Car";
    }
}