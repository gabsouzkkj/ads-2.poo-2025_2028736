<?php

require_once 'Veiculo.php';
require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro ('Toyota', 'Corolla', 2020, 4);
$carro->getDados() . "Portas: " . $carro->getPortas();

$carro->acelerar(50);
$carro->frear(50);
$carro->abrirPortas(1);

$moto = new Moto ('Yamaha', 'MT-07', 2018);
$moto->getDados();

$moto->acelerar(30);
$moto->frear(10);
$moto->empinar();