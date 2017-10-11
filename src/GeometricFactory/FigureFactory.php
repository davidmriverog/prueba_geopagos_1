<?php

namespace Geopagos\GeometricFactory;

class FigureFactory implements FacadeFactory
{
    /**
     * @inheritdoc
     */
    public static function create(array $attrs)
    {
        return Geometric()
    }
}