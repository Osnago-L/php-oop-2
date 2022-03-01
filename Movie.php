<?php
class Movie 
{
    private $title;
    private $genre;
    private $length;
    private $director;
    private $cast;

    public function __construct($_title,$_genre,$_length,$_director,$_cast){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->cast = $_cast;
        $this->length = $_length;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getLength(){
        return $this->length;
    }
};