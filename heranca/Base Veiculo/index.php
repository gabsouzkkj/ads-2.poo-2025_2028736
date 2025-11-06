<?php

require_once 'Veiculo.php';
require_once 'Carro.php';
require_once 'Moto.php';


# =========
# Testes
$carro = new Carro ('Toyota', 'Corolla', 2020, 4);
echo $carro->getDados() . " | Portas: " . $carro->getPortas() . "<br>\n";

$carro->acelerar(50);
$carro->abrirPortas(1);
$carro->frear(50);

$moto = new Moto ('Yamaha', 'MT-07', 2018);
echo $moto->getDados() . "<br>\n";

$moto->acelerar(30);
$moto->empinar();
$moto->frear(10);