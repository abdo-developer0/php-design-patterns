<?php

namespace PhpDesignPatterns\Creational\ProtoType;

use PhpDesignPatterns\Creational\ProtoType\Abstracts\AbstractCarProtoType;

class AutomaticCarProtoType extends AbstractCarProtoType
{
    protected string $model = 'automatic';

    public function __clone()
    {
        
    }
}