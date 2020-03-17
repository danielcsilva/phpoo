<?php
/*include_once('victor.php');

$vitor = new Victor('chupa peitinho','1231412312',
    new Pessoa('vitor','vitor@email.com','16','1,82'));*/

include_once('carro.php');


$carro = new Carro(new Automovel('2.0','Ford','Focus','2021','2020','170 cv','preto','sedan'),'4','sim');


print_r($carro->automovel->acelerar('100'));