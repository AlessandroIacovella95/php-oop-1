<?php

require_once __DIR__ . './Models/movie.php';
require_once __DIR__ . './Models/genere.php';


$movie_1 = New Movie('Come un gatto in tangenziale','2017', 'Commedia', 'Italiana');
$movie_2 = New Movie('John Wick','2014','Azione', 'Inglese');

$movie_1 -> getDescriptionMovie();
$movie_2 -> getDescriptionMovie();

var_dump($movie_1);
echo($movie_1 -> getDescriptionMovie());
var_dump($movie_2);
echo($movie_2 -> getDescriptionMovie());