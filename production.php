<?php

require_once __DIR__ . './Traits/publishable.php';
class Production {

    use Publishable;
    public $titolo;
    public $lingua;
    public $genere;

    public $rating;

    public function __construct(
        string $titolo, 
        string $lingua, 
        Genere $genere,
        int $rating,
        int  $publication_year
        ) 
        {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->genere = $genere;
        $this->setRating($rating);
        $this->setPublicationYear($publication_year);
    }

    private function setRating($rating)
    {
        if(!is_integer($rating) || $rating < 1 || $rating > 5){
            throw new Exception ('Il rating deve essere un numero compreso tra 1 e 5');
        }
        $this->rating = $rating;
    }
}