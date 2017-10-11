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
     * @param  array $attrs
     * @return mixed
     */
    public static function create(array $attrs);
}