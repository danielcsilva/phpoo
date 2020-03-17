<?php
 include_once('automovel.php');

 class Carro extends Automovel{

    public $porta;
    public $sensordere;
    public $portamalas;
    public $automovel;

    public function __construct(Automovel $automovel, $porta,$sensordere)
    {
        $this->porta = $porta;
        $this->sensordere = $sensordere;
        $this->automovel = $automovel;
    }


    public function acenderFarol()
    {
        return "ligar farol";
    }



 }