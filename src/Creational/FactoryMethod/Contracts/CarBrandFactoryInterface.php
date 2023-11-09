<?php

namespace PhpDesignPatterns\Creational\FactoryMethod\Contracts;

interface CarBrandFactoryInterface
{
    /**
     * Build brand.
     * 
     * @return CarBrandInterface
     */
    public function BuildBrand(): CarBrandInterface;
}