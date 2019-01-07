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

$output = new SumCalculatorOutputter($areas);
$output2 = new SumCalculatorOutputter($volumes);

echo $output->JSON();
echo $output->HAML();
echo $output2->HTML();
echo $output2->JADE();