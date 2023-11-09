<?php

namespace PhpDesignPatterns\Structural\Adapter;

use PhpDesignPatterns\Structural\Adapter\Contracts\TurboInterface;

class TurboEngine implements TurboInterface
{
    public function startTurbo(): mixed
    {
        return 'Turbo is started';
    }
}