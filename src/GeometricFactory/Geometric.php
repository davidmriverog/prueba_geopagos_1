<?php

namespace Geopagos\GeometricFactory;

/**
 * class Geometric
 *
 * @package Geopagos\GeometricFactory;
 * @author David Rivero <[<davidmriverog@gmail.com>]>
 */
class Geometric
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * Geometric construct.
     * 
     * @param array $attributes
     */
    public function __construct(array $attributes=[])
    {
        $this->fill($attributes);
    }

    /**
     * Get Attribute by name.
     * 
     * @param string $name
     * @return mixed
     */
    public function getAttribute($name)
    {
        if(array_key_exists($name,$this->attributes)) {
            return $this->attributes[$name];
        }
    }

    /**
     * Set Attributes
     * 
     * @param string $name
     * @param string $value
     */
    public function setAttribute($name,$value)
    {
        $this->attributes[$name] = $value;
    }

    /**
     * Fill data.
     * 
     * @param  array $attributes 
     * @return mixed
     */
    public function fill(array $attributes=[])
    {
        $this->attributes = $attributes;
    }
}