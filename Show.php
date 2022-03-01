<?php
class Show 
{

    private $movie;
    private $date;
    private $time;
    private $sala;

    public function __construct($_movie,$_date,$_time,$_sala){
        $this->movie = $_movie;
        $this->date = $_date;
        $this->time = $_time;
        $this->sala = $_sala;
    }

    public function getMovie(){
        return $this->movie;
    }

    public function getDate(){
        return $this->date;
    }
    public function getTime(){
        return $this->time;
    }
};