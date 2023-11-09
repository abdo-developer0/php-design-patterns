<?php

namespace PhpDesignPatterns\Structural\Adapter\Contracts;


interface TurboInterface
{
    /**
     * The method for start engine.
     * 
     * @return mixed
     */
    public function startTurbo(): mixed;
}