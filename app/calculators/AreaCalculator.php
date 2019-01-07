<?php

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        try {
            foreach ($this->shapes as $shape) {

                if (is_a($shape, 'ShapeInterface')) {
                    $area[] = $shape->area();
                    continue;
                }

                throw new AreaCalculatorInvalidShapeException(get_class($shape));
            }
        } catch (AreaCalculatorInvalidShapeException $e) {

            //display custom message
            $e->errorMessage();
        }

        return array_sum($area);

    }

}
