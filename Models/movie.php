<?php
class Movie {
    public $titolo;
    public $anno;
    public $genere;
    public $lingua;

    function __construct
    (string $titolo, 
    string $anno, 
    string $genere, 
    string $lingua 
    )
    {
       $this->titolo = $titolo;
       $this->anno = $anno;
       $this->genere = $genere;
       $this->lingua = $lingua;
    }

    public function getDescriptionMovie(){
        return "Titolo: $this->titolo <br> Anno: $this->anno <br> Genere: $this->genere <br> Lingua: $this->lingua";
    }

}