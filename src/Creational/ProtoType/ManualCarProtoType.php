<?php

namespace PhpDesignPatterns\Creational\ProtoType;

use PhpDesignPatterns\Creational\ProtoType\Abstracts\AbstractCarProtoType;

class ManualCarProtoType extends AbstractCarProtoType
{
    protected string $model = 'manual';

    public function __clone()
    {
        
    }
}