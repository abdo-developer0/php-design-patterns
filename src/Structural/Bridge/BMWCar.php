<?php

namespace PhpDesignPatterns\Structural\Bridge;

class BMWCar extends Car
{
    public function getProduct(): string
    {
        return 'BMW';
    }

    public function calcolatePrice(): int
    {
        return 2000000;
    }
}