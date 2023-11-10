<?php

namespace PhpDesignPatterns\Structural\Bridge\Colors;

use PhpDesignPatterns\Structural\Bridge\Contracts\CarColor;

class BlueCar implements CarColor
{
    /**
     * Return blue coloar.
     * 
     * @return string 'blue'
     */
    public function getColor(): string
    {
        return 'blue';
    }
}