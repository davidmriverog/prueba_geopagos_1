<?php

namespace Geopagos\Geometric;

/**
 * class Triangle.
 *
 * @package Geopagos\Geometric;
 * @author  David Rivero <[<davidmriverog@gmail.com>]>
 */
class Triangle extends Figure
{
    /**
     * @var double
     */
    protected $base;

    /**
     * @var double
     */
    protected $height;

    /**
     * Get Base.
     * 
     * @return double
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set Base.
     * 
     * @param double $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * Get Height.
     * 
     * @return double
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set Base.
     * 
     * @param double $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @inheritdoc
     */
    public function calculateArea()
    {
        $this->area = ($this->getBase() * $this->getHeight()) / 2;
    }
}
