<?php

namespace PhpDesignPatterns\Structural\Bridge\Contracts;

interface CarColor
{
    /**
     * Return custom color.
     * 
     * @return string of color.
     */
    public function getColor(): string;
}