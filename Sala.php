<?php
class Sala 
{
    private $id;
    private $name;
    private $capacity;
    private $screen;
    private $is_3d = FALSE;

    public function __construct($_name,$_capacity,$_screen){
        $this->name = $_name;
        $this->capacity = $_capacity;
        $this->screen = $_screen;
    }

    public function set3d($_is_3d){
        $this->is_3d = $_is_3d;
    }
};
