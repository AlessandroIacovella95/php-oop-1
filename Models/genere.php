<?php
class Genere {
    public $nome;

    public function __construct
    (
       string $nome
    ) 
    {
        $this->nome = $nome;
    }

    public function getName() {
        return $this->nome;
    }
}