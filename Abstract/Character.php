<?php

abstract class Character_1 {

    public $attack;
    public $defend;
    abstract public function Attack();
    abstract public function Defend();
    abstract public function Sleep();

    public function Setup($a, $b) {
        $this->attack = (int) $a;
        $this->defend = (int) $b;
    }
}