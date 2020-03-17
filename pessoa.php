<?php

class Pessoa {

    public $nome;
    public $email;
    public $idade;
    public $tamanho;

    public function __construct($nome,$email,$idade,$tamanho)
    {
        $this->nome     = $nome;
        $this->email    = $email;
        $this->idade    = $idade;
        $this->tamanho  = $tamanho;
    }

    public function falar()
    {
        return "eu falo";
    }

    public function correr()
    {
        return "correr";
    }

}