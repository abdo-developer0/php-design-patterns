<?php

namespace PhpDesignPatterns\Creational\FactoryMethod\Contracts;

interface CarBrandInterface
{
    /**
     * Create brand.
     * 
     * @return string
     */
    public function createBrand(): string;
}