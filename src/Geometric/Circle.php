<?php

namespace Geopagos\Geometric;

/**
 * class Circle 
 *
 * @package Geopagos\Geometric;
 * @author David Rivero <[<davidmriverog@gmail.com>]>
 */
class Circle implements Figure
{
    /**
     * @var double
     */
    protected $radio;

    /**
     * @var double
     */
    protected $areaRadio;

    /**
     * @inheritdoc
     */
    public function calculateArea()
    {
        //
    }
}