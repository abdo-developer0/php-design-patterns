<?php

namespace PhpDesignPatterns\Structural\Adapter;

use PhpDesignPatterns\Structural\Adapter\Contracts\EngineInterface;

class NormalEngine implements EngineInterface
{
    public function startEngine(): mixed
    {
        return 'Normal is started';
    }
}