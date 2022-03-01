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
    new Movie("title1","genre1","1:59","director1",["actor1","actor1","actor1"]),
    new Movie("title2","genre2","1:40","director2",["actor2","actor2","actor2"]),
    new Movie("title3","genre3","1:40","director3",["actor3","actor3","actor3"]),
    new Movie("title4","genre4","1:40","director4",["actor4","actor4","actor4"]),
];
$shows = [
    new Show($movies[0],"28/02/2022","16:31",$sale[0]),
    new Show($movies[1],"27/02/2022","10:31",$sale[1]),
    new Show($movies[2],"21/02/2022","11:31",$sale[2]),
    new Show($movies[1],"26/02/2022","12:31",$sale[3]),
    new Show($movies[0],"28/02/2022","14:31",$sale[4])
];

$sale[1]->set3d(TRUE);
$sale[3]->set3d(TRUE);

echo "<h3>Esercizio 2 - soluzione 1</h3>";

var_dump($sale);

echo "<h3>Esercizio 2 - soluzione 2</h3>";

$sumCapacity = 0;
foreach ($sale as $key) {
    $sumCapacity += $key->getCapacity();
}
var_dump($sumCapacity);

echo "<h3>Esercizio 2 - soluzione 3</h3>";

$date="28/02/2022";
$movieTitle="title1";
$countShows=0;

foreach ($shows as $key) {
    if (($date == $key->getDate())&&($movieTitle == $key->getMovie()->getTitle())) {
        $countShows++;
    }
}

var_dump($countShows);

echo "<h3>Esercizio 2 - soluzione 4</h3>";

$oraFinale=0;
foreach ($shows as $key) {
    if ($date == $key->getDate()) {
        if ($key->getTime()>$oraFinale) {
            $oraFinale = $key->getTime();
        }
    }
}
$movieLength =0;
foreach ($shows as $key ) {
    if ($oraFinale == $key->getTime()) {
        $movieLength = $key->getMovie()->getLength();
    }
}

$arrayMovieLength = explode(":",$movieLength);
$arrayoraFinale = explode(":",$oraFinale);

$arrayoraFinale[0] = $arrayoraFinale[0]+$arrayMovieLength[0];
$arrayoraFinale[1] = $arrayoraFinale[1]+$arrayMovieLength[1];

if ($arrayoraFinale[1]>59) {
    $arrayoraFinale[0] = $arrayoraFinale[0]+1;
    $arrayoraFinale[1] = $arrayoraFinale[1]-60;
}

var_dump(implode(":",$arrayoraFinale));