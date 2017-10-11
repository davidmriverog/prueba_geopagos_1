<?php

namespace Geopagos;

use Geopagos\Geometric\Circle;
use Geopagos\Geometric\Square;

require '../vendor/autoload.php';

// Implements

// Circulo
show("*** CIRCULO ***");
$circle = new Circle;
$circle->setRadio(2);
show("Ingresamos el radio: {$circle->getRadio()}");
$circle->calculateArea();
show("El area del circulo es: {$circle->getArea()}");

// Cuadrado
show("*** CUADRADO ***");
$square = new Square;
$square->setSideOfSquare(7);
show("Ingresamos el lado del cuadrado: {$square->getSideOfSquare()}");
$square->calculateArea();
show("El area del cuadrado es: {$square->getArea()}");


