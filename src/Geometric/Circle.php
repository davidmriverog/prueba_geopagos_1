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
     * Get Radio.
     * 
     * @return double
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * Get Area Radio.
     * 
     * @return double
     */
    public function getAreaRadio()
    {
        return $this->areaRadio;
    }

    /**
     * Set Radio
     * 
     * @param double $radio
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
        $this->areaRadio = pow($this->getRadio(), 2) * Utils::PI;
    }
}