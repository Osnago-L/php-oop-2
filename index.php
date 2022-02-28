<?php
require_once __DIR__."./Sala.php";
require_once __DIR__."./Sala4D.php";
require_once __DIR__."./Show.php";
require_once __DIR__."./Movie.php";

// cinema paradiso 
$sale = [
    new Sala("nome1",100,"grande1"),
    new Sala("nome2",101,"grande2"),
    new Sala("nome3",102,"grande3"),
    new Sala4D("nome5",104,"grande5",["smoke","vibration","water"]),
    new Sala4D("nome5",104,"grande5",["vibration"]),
];
$movies = [
    new Movie("title1","genre1","director1",["actor1","actor1","actor1"]),
    new Movie("title2","genre2","director2",["actor2","actor2","actor2"]),
    new Movie("title3","genre3","director3",["actor3","actor3","actor3"]),
    new Movie("title4","genre4","director4",["actor4","actor4","actor4"]),
];
$shows = [
    new Show($movies[0],"28/02/2022","14:31",$sale[0]),
    new Show($movies[1],"28/02/2022","14:31",$sale[1]),
    new Show($movies[2],"28/02/2022","14:31",$sale[2]),
    new Show($movies[3],"28/02/2022","14:31",$sale[3]),
    new Show($movies[0],"28/02/2022","14:31",$sale[4])
];

$sale[1]->set3d(TRUE);
$sale[3]->set3d(TRUE);

var_dump($shows);


