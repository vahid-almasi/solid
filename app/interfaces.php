<?php


interface ShapeInterface
{
    public function area();
}

interface SolidShapeInterface
{
    public function volume();
}

interface OutPutRenderInterface{

    /**
     * @param $result
     * @return mixed
     */
    public function render($result);
}