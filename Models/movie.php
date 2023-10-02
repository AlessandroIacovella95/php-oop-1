<?php

include './production.php';
class Movie extends Production {
    public $published_year;
    public $running_time;
    
    public function __construct(
        string $titolo, 
        string $lingua, 
        Genere $genere, 
        string $published_year, 
        int $running_time
        )
        
        {
        parent::__construct($titolo, $lingua, $genere);
        $this->published_year = $published_year;
        $this->running_time = $running_time;



    }

    public function getDescriptionMovie(){
        return "Titolo: $this->titolo <br> Lingua: $this->lingua <br> Genere: " . $this->genere->getName() . " <br> Anno di pubblicazione: $this->published_year <br> Durata film: $this->running_time  ";
    }

}