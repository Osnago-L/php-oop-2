<?php
class Movie 
{
    private $title;
    private $genre;
    private $director;
    private $cast;

    public function __construct($_title,$_genre,$_director,$_cast){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->cast = $_cast;
    }
};