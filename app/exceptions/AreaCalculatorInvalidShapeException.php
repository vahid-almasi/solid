<?php

class AreaCalculatorInvalidShapeException extends Exception
{

    public function errorMessage() {
        //error message
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> class must implement from ShapeInterface interface';
        die($errorMsg);
    }

}