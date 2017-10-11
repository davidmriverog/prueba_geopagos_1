<?php

namespace Geopagos\Geometric;

/**
 * class Circle 
 *
 * @package Geopagos\Geometric;
 * @author David Rivero <[<davidmriverog@gmail.com>]>
 */
class Circle extends Figure
{
    /**
     * @var double
     */
    protected $radio;

    /**
     * Get Radio.
     * 
     * @return double
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * Set Radio
     * 
     * @param double $radio
     * @return  mixed
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    /**
     * @inheritdoc
     */
    public function calculateArea()
    {
        $this->area = pow($this->getRadio(), 2) * Utils::PI;
    }
}