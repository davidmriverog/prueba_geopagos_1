<?php

namespace MyCommunity;

use MyCommunity\Geometric\Circle;

require '../vendor/autoload.php';

// Implements

// Circulo
show("*** CIRCULO ***");
$circle = new Circle;

$circle->setRadio(5);
show("Ingresamos el radio: {$circle->getRadio()}");
$circle->calculateArea();

show("El area del circulo es: {$circle->getAreaRadio()}");

