<?php

class Html implements OutPutRenderInterface
{

    public function render($result)
    {
        return  "<div class='result'><label>Sum : </label> $result</div>";
    }
}