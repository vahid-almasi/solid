<?php

require 'bootstrap.php';

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);

$solidShapes = array(
    new sphere(2),
    new cuboid(5),
    new cuboid(6)
);

$areas = new AreaCalculator($shapes);
$volumes = new AreaCalculator($solidShapes);

$jsonOutput=new Json();

$render=new SumCalculatorOutputter($jsonOutput);
echo $render->render($areas->sum());
echo "\n";


$htmlOutput=new Html();

$render=new SumCalculatorOutputter($htmlOutput);
echo $render->render($volumes->sum());

echo "\n";