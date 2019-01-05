<?php


class SumCalculatorOutputter
{
    protected $calculator;

    public function __construct($calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON()
    {
        $data = array(
            'sum' => $this->calculator->sum()
        );
        return json_encode($data);

    }

    public function HTML()
    {
        return implode('', array(
            '',
            'Sum of the areas of provided shapes: ',
            $this->calculator->sum(),
            ''
        ));
    }

    public function HAML()
    {
        return implode('', array(
            '.content',
            'Sum of the areas of provided shapes: ',
            $this->calculator->sum(),
            ''
        ));
    }

    public function JADE()
    {

        return implode('', array(
            '.content',
            'Sum of the areas of provided shapes ',
            $this->calculator->sum(),
            ''
        ));
    }
}