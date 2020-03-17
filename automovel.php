<?php
class Automovel {

    public $motor;
    public $marca;
    public $modelo;
    public $anoConstrucao;
    public $anoFabricacao;
    public $cilindrada;
    public $cor;
    public $tipo;
    
    public function __construct($motor,$marca,$modelo,$anoConstrucao,$anoFabricacao,$cilindrada,$cor,$tipo)
    {
        $this->motor = $motor;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoConstrucao = $anoConstrucao;
        $this->anoFabricacao = $anoFabricacao;
        $this->cilindrada = $cilindrada;
        $this->cor = $cor;
        $this->tipo = $tipo;
    }


    public function buzina()
    {
        return "buzinando";
    }

    public function acelerar($velocidade)
    {
        return $velocidade;
    }

    public function frear()
    {
        return "frear";
    }

    public function ligarSeta($seta)
    {
        if($seta=="direita"){
            echo "seta direita";
        }else if($seta == "esquerda"){
            echo "seta esquerda";
        }
    }

    public function __toString()
    {
        return $this->motor . ' - ' . $this->marca . ' - ' . $this->modelo;
    }
}