<?php

namespace Geopagos\AbstractFigure;

/**
 * class TriangleFigure
 *
 * @package Geopagos\AbstractFigure;
 * @author David Rivero <[<davidmriverog@gmail.com>]>
 */
class TriangleFigure extends InterfaceFigure
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
        return $this->area = ($this->data['base'] * $this->data['height']) / 2;
    }
}