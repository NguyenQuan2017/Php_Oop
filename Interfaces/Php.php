<?php

//PHP OOP Tutorial Interfaces
class Php implements Parsed {

    public function __construct()
    {
        echo "Php was created <br/>";
        $this->parsed("sdf");
    }

    public function parsed($blah)
    {
        echo '1';
    }
}