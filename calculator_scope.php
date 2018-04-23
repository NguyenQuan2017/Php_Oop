<?php
// PHP OOP Tutorial 3 | Scope & Calculator

class  Calc
{
    public $input;
    protected $input2;
    public $results;

    function getInput($int) {
        $this->input = (int) $int;
    }

    function getInput2($int2){
        $this->input2 = (int) $int2;
    }
    function calculated() {
        $this->results = $this->input * $this->input2;
    }

    function getResults() {
        return $this->results;
    }
}
class Test extends  Calc{
    function getOutput() {
      return  $this->input2 = 3;
    }
}
$calc = new Calc();
$calc->getInput(5);
$calc->getInput2(10);
$calc->calculated();
echo $calc->getResults();
$test = new Test();
echo $test->getOutput();