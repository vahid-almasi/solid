<?php



class Cuboid implements ShapeInterface, SolidShapeInterface
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }

    public function volume()
    {
        return pow($this->length, 3);
    }

}