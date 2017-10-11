<?php

namespace Geopagos\AbstractFigure;

use Geopagos\Geometric\Utils;

class CircleFigure extends InterfaceFigure
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
        return $this->area = pow($this->data['radio'], 2) * Utils::PI;
    }
}