<?php

class Json implements OutPutRenderInterface
{

    public function render($result)
    {
        return json_encode(['sum'=>$result]);
    }
}