<?php

namespace PhpDesignPatterns\Creational\Builder\Cars;

class Car
{
    /**
     * Attributes of the car.
     * 
     * @var array $attributes
     */
    protected array $attributes = [];

    /**
     * Set attribute of the car.
     * 
     * @param string $attribute The attribute name to be set
     * @param mixed $value The value to be set.
     * @return Car
     */
    public function setAttribute(string $attribute, mixed $value): Car
    {
        $this->attributes[$attribute] = $value;

        return $this;
    }
}