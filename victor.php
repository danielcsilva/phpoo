<?php

include_once('pessoa.php');

class Victor extends Pessoa {

    public $segredo;
    public $cpf;
    public $pessoa;

    public function __construct($segredo,$cpf, Pessoa $pessoa)
    {
        $this->segredo = $segredo;
        $this->cpf = $cpf;
        $this->pessoa = $pessoa;
    }

}