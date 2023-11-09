<?php

namespace PhpDesignPatterns\Creational\FactoryMethod;

use PhpDesignPatterns\Creational\FactoryMethod\Brands\BenzBrand;
use PhpDesignPatterns\Creational\FactoryMethod\Contracts\CarBrandFactoryInterface;

class BenzBrandFactory implements CarBrandFactoryInterface
{
    /**
     * Build brand.
     * 
     * @return BenzBrandFactory
     */
    public function BuildBrand(): BenzBrand
    {
        return new BenzBrand;
    }
}