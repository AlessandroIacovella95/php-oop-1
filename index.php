<?php

require_once __DIR__ . './Models/movie.php';
require_once __DIR__ . './Models/serieTv.php';
require_once __DIR__ . './Models/genere.php';
require_once __DIR__ . './production.php';


$comedyGenere = new Genere("Commedia");
$detectiveStoryGenere = new Genere("Poliziesco");

$production = New Production ('titolo', 'italiano', $comedyGenere );

$movie_1 = New Movie('Come un gatto in tangenziale','Italiana', $comedyGenere, '2017', 90 );
$serie_1 = New TvSerie('Criminal Minds','Inglese', $detectiveStoryGenere, '2005', '2016', 334, 16);

$movie_1 -> getDescriptionMovie();
$serie_1 -> getDescriptionSerieTV();

var_dump($production);
var_dump($movie_1);
echo($movie_1 -> getDescriptionMovie()); 
var_dump($serie_1);
echo($serie_1 -> getDescriptionSerieTV());