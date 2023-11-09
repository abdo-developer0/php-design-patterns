<?php

namespace PhpDesignPatterns\Structural\Adapter;

use PhpDesignPatterns\Structural\Adapter\Contracts\EngineInterface;

class TurboEngineAdapter implements EngineInterface
{
    /**
     * The targe turbo engine to adpt it.
     * 
     * @var TurboEngine $turboEngine
     */
    protected TurboEngine $turboEngine;

    /**
     * Initialize Adapter.
     * 
     * @param TurboEngine $turboEngine The engine to adapt
     * @return void
     */
    public function __construct(TurboEngine $turboEngine)
    {
        $this->turboEngine = $turboEngine;
    }

    /**
     * Adapting startTurbo to startEngine to use.
     * 
     * @return mixed
     */
    public function startEngine(): mixed
    {
        return $this->turboEngine->startTurbo();
    }
}