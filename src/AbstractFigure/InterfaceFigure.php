<?php

namespace Geopagos\AbstractFigure;

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

    public function __construct($data)
    {
        $this->data = $data;
    }

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