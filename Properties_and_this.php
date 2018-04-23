<?php
 // PHP OOP Tutorial 2 | Properties and $this

class Example
{
    public $item = 'item';
    var $name;
    function Sample() {
        $this->Test();
    }
    function Test() {
       echo "Test";
       echo  $this->item;
    }
}
$e = new Example();
$e->Sample();