<?php

namespace Geopagos;

// Modo 1
use Geopagos\Geometric\Circle;
use Geopagos\Geometric\Square;
use Geopagos\Geometric\Triangle;

// Modo 2
use Geopagos\GeometricFactory\FigureFactory;
use Geopagos\AbstractFigure\CircleFigure;

require '../vendor/autoload.php';

// Implements

show("*** INICIO DEL MODO 1 ***");
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

// Triangulo
show("*** TRIANGULO ***");
$triangle = new Triangle;
$triangle->setBase(2);
show("Ingresamos la base del triangulo: {$triangle->getBase()}");
$triangle->setHeight(2);
show("Ingresamos la altura del triangulo: {$triangle->getHeight()}");
$triangle->calculateArea();
show("El area del cuadrado es: {$triangle->getArea()}");

show("*** FIN DEL MODO 1 ***");

show("*** INICIO DEL MODO 2 *** - Usando la capa factory");

$circleFactory = FigureFactory::create(['name' => 'Circulo'])
    ->setFigure(new CircleFigure(['radio' => 2]));

$circleFactory->calculateArea();
$circleFactory->show();