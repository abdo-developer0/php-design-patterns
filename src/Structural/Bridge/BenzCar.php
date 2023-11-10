<?php

namespace PhpDesignPatterns\Structural\Bridge;

class BenzCar extends Car
{
    public function getProduct(): string
    {
        return 'Benz';
    }

    public function calcolatePrice(): int
    {
        return 3000000;
    }
}