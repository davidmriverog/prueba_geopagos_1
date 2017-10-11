<?php

namespace Geopagos\Geometric;

/**
 * class Square.
 *
 * @package Geopagos\Geometric;
 * @author  David Rivero <[<davidmriverog@gmail.com>]>
 */
class Square extends Figure
{
    /**
     * @var double
     */
    protected $sideOfSquare;

    /**
     * Get Side of Square.
     * 
     * @return double
     */
    public function getSideOfSquare()
    {
        return $this->sideOfSquare;
    }

    /**
     * Get Side of Square.
     * 
     * @return mixed
     */
    public function setSideOfSquare($side)
    {
        $this->sideOfSquare = $side;
    }

    /**
     * @inheritdoc
     */
    public function calculateArea()
    {
        $this->area = pow($this->getSideOfSquare(), 2);
    }
}