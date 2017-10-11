<?php

namespace Geopagos;

require '../vendor/autoload.php';

// Implements

use Geopagos\Geometric\Circle;

// Circulo
$circle = new Circle;

$circle->setRadio(3);
$circle->calculateArea();

