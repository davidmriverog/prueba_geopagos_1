<?php

namespace Geopagos\Geometric;

/**
 * interface Figure
 *
 * @package Geopagos\Geometric;
 * @author David Rivero <[<davidmriverog@gmail.com>]>
 */
abstract class Figure
{
    /**
     * @var double
     */
    protected $area;

    /**
     * Get Area Figure.
     * 
     * @return double
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Calculate Area Figure.
     * 
     * @return double
     */
    abstract public function calculateArea();
}
