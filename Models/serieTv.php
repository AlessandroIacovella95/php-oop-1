<?php
class TvSerie extends Production {
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(
        string $titolo, 
        string $lingua, 
        Genere $genere, 
        int $rating,
        int $published_year, 
        string $aired_from_year, 
        string $aired_to_year, 
        int $number_of_episodes, 
        int $number_of_seasons
        ) 
        
        {
        parent::__construct($titolo, $lingua,$genere, $rating, $published_year, );
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }

    public function getDetails(){
        return "Titolo: $this->titolo <br> Lingua: $this->lingua <br> Genere: " . $this->genere->getName() . " <br> Voto: $this->rating <br> Anno di pubblicazione:  {$this->getPublicationYear()} <br>  In onda dall'anno: $this->aired_from_year <br> Andato in onda fino: $this->aired_to_year <br>  Numero di episodi: $this->number_of_episodes <br> Numero di stagioni:  $this->number_of_seasons";
    }

}