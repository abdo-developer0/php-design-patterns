<?php

namespace PhpDesignPatterns\Creational\ProtoType\Abstracts;

abstract class AbstractCarProtoType
{
    /**
     * The model of car.
     * 
     * @var string $model
     */
    protected string $modle;

    /**
     * The flag of car
     * 
     * @var string $flag
     */
    protected string $flag;

    /**
     * Get value of flat property.
     * 
     * @return string The value of flag
     */
    public function getFlag(): string
    {
        return   $this->flag;
    }

    /**
     * Set value of flat property.
     * 
     * @param string $value The value to be set for flag property
     * @return void
     */
    public function setFlag(string $value): void
    {
        $this->flag = $value;
    }

    abstract function __clone();
}