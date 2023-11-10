<?php

namespace PhpDesignPatterns\Structural\Bridge\Colors;

use PhpDesignPatterns\Structural\Bridge\Contracts\CarColor;

class BlackCar implements CarColor
{
    /**
     * Return black coloar.
     * 
     * @return string 'black'
     */
    public function getColor(): string
    {
        return 'black';
    }
}