<?php


class SumCalculatorOutputter
{
    /**
     * @var OutPutRenderInterface
     */
    private $output;

    /**
     * @param OutPutRenderInterface $output
     */
    public function __construct(OutPutRenderInterface $output)
    {
        $this->output=$output;
    }

    public function render($result){
        return $this->output->render($result);
    }

}