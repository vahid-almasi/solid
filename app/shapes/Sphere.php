<?php



class Sphere implements ShapeInterface, SolidShapeInterface
{

    public $radius;

    public function __construct($radius)
    {

        $this->radius = $radius;

    }

    public function area()
    {
        return 4 * pi() * pow($this->radius, 2);
    }

    public function volume()
    {
        return (4 * pi() * pow($this->radius, 3)) / 3;
    }

}