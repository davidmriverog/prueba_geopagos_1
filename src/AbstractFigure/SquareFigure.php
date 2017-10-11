<?php

namespace Geopagos\AbstractFigure;

/**
 * class SquareFigure
 *
 * @package Geopagos\AbstractFigure;
 * @author David Rivero <[<davidmriverog@gmail.com>]>
 */
class SquareFigure extends InterfaceFigure
{
    /**
     * CircleFigure construct.
     * 
     * @param array $data
     */
    public function __construct($data)
    {
        parent::__construct($data);
    }

    /**
     * @inheritdoc
     */
    public function calculateArea()
    {
        return $this->area = pow($this->data['slide'], 2);
    }
}