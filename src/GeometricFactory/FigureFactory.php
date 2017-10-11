<?php

namespace Geopagos\GeometricFactory;

/**
 * class FigureFactory
 *
 * @package Geopagos\GeometricFactory;
 * @author David Rivero <[<davidmriverog@gmail.com>]>
 */
class FigureFactory implements FacadeFactory
{
    /**
     * @inheritdoc
     */
    public static function create(array $attrs)
    {
        return new Geometric($attrs);
    }
}