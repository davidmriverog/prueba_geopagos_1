<?php

namespace Geopagos\AbstractFigure;

/**
 * abstract class InterfaceFigure.
 *
 * @package Geopagos\AbstractFigure;
 * @author  David Rvero <[<davidmriverog@gmail.com>]>
 */
abstract class InterfaceFigure
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var double
     */
    protected $area;

    /**
     * InterfaceFigure construct.
     * 
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get Area.
     * 
     * @return array
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Calculate Area.
     * 
     * @return double
     */
    abstract public function calculateArea();
}