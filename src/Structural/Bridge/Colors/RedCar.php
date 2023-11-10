<?php

namespace PhpDesignPatterns\Structural\Bridge\Colors;

use PhpDesignPatterns\Structural\Bridge\Contracts\CarColor;

class RedCar implements CarColor
{
    /**
     * Return red coloar.
     * 
     * @return string 'red'
     */
    public function getColor(): string
    {
        return 'red';
    }
}