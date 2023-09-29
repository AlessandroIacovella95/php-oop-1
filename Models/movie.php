<?php
class Movie {
    public $titolo;
    public $anno;
    public $lingua;
    public $genere;

    function __construct
    (string $titolo, 
    string $anno, 
    string $lingua, 
    Genere $genere, 
    )
    {
       $this->titolo = $titolo;
       $this->anno = $anno;
       $this->lingua = $lingua;
       $this->genere = $genere;
    }

    public function getDescriptionMovie(){
        return "Titolo: $this->titolo <br> Anno: $this->anno <br> Lingua: $this->lingua <br> Genere: " . $this->genere->getName() . "";
    }

}