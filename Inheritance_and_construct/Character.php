<?php

class Character {

    protected $hp = 100;
    protected $dmg = 10;
//    protected $mp;
    protected $armor = 10;

    protected function __construct()
    {
        echo "The Character was created";
    }

    public function Attack() {
        echo "The Character Attack for ".$this->dmg;
    }
}