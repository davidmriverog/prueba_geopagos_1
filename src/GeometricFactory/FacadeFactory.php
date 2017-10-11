<?php

namespace Geopagos\GeometricFactory;

/**
 * interface FacadeFactory.
 *
 * @package Geopagos\GeometricFactory;
 * @author  David Rvero <[<davidmriverog@gmail.com>]>
 */
interface FacadeFactory
{
    /**
     * Create Instance By Factory Pattern
     * 
     * @return mixed
     */
    public static function create();

    /**
     * Calctuate Area of Figure.
     * 
     * @return double
     */
    public function calculateArea();
}