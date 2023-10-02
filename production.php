<?php
class Production {
    public $titolo;
    public $lingua;
    public $genere;

    public function __construct(
        string $titolo, 
        string $lingua, 
        Genere $genere
        ) 
        {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->genere = $genere;
    }
}