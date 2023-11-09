<?php

namespace PhpDesignPatterns\Structural\Adapter;

use PhpDesignPatterns\Structural\Adapter\Contracts\EngineInterface;

class Car
{
    /**
     * The engine of car.
     * 
     * @var EngineInterface $endine
     */
    protected EngineInterface $engine;

    /**
     * Initialize new Car.
     * 
     * @param EngineInterface $engine The engine implemention
     * @return void
     */
    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    /**
     * This for turn on the engine.
     * 
     * @return mixed
     */
    public function startEngine(): mixed
    {
        return $this->engine->startEngine();
    }
}