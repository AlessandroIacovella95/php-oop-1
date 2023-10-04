<?php

include './production.php';
class Movie extends Production {
    public $running_time;

    
    public function __construct(
        string $titolo, 
        string $lingua, 
        Genere $genere, 
        int $rating,
        int $published_year, 
        int $running_time

        )
        
        {
        parent::__construct($titolo, $lingua, $genere, $rating, $published_year, );
        $this->running_time = $running_time;



    }

    public function getDetails(){
        return "Titolo: $this->titolo <br> Lingua: $this->lingua <br> Genere: " . $this->genere->getName() . " <br> Anno di pubblicazione: {$this->getPublicationYear()} <br> Voto: $this->rating <br> Durata film: $this->running_time  ";
    }

}