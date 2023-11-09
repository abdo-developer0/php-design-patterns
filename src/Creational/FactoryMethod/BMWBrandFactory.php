<?php

namespace PhpDesignPatterns\Creational\FactoryMethod;

use PhpDesignPatterns\Creational\FactoryMethod\Brands\BMWBrand;
use PhpDesignPatterns\Creational\FactoryMethod\Contracts\CarBrandFactoryInterface;

class BMWBrandFactory implements CarBrandFactoryInterface
{
    /**
     * Build brand.
     * 
     * @return BenzBrandFactory
     */
    public function BuildBrand(): BMWBrand
    {
        return new BMWBrand;
    }
}