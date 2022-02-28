<?php
class Sala4D extends Sala
{
    private $effects;

    public function __construct($_name,$_capacity,$_screen,$_effects){
        parent::__construct($_name,$_capacity,$_screen);
        $this->effects = $_effects;
    }
}
