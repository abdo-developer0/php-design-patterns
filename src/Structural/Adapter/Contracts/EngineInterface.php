<?php

namespace PhpDesignPatterns\Structural\Adapter\Contracts;


interface EngineInterface
{
    /**
     * The method for start engine.
     * 
     * @return mixed
     */
    public function startEngine(): mixed;
}