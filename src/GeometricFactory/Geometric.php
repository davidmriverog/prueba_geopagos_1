<?php

namespace Geopagos\GeometricFactory;

use Geopagos\AbstractFigure\InterfaceFigure;

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
     * @var InterfaceFigure
     */
    protected $figure;

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
     * Get Attributes.
     * 
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
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
     * @return mixed
     */
    public function setAttribute($name,$value)
    {
        $this->attributes[$name] = $value;
    }

    /**
     * Set Figure Data.
     * 
     * @param InterfaceFigure $figure
     */
    public function setFigure(InterfaceFigure $figure)
    {
        $this->figure = $figure;

        return $this;
    }

    /**
     * Calculate Area Figure Class.
     * 
     * @return mixed
     */
    public function calculateArea()
    {
        return $this->figure->calculateArea();
    }

    /**
     * Get Area Figure
     * 
     * @return double
     */
    public function getArea()
    {
        return $this->figure->getArea();
    }

    /**
     * Get Semantic Geometric.
     * 
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    /**
     * Get Semantic Geometric.
     * 
     * @param string $name
     * @param string $value
     * @return mixed
     */
    public function __set($name,$value)
    {
        return $this->setAttribute($name,$value);
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

    /**
     * Show Message
     * 
     * @return mixed
     */
    public function show()
    {
        return show("Figura: {$this->name} tiene un area de: {$this->figure->getArea()}");
    }
}