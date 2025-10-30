<?php

require_once 'Animal.php';
require_once 'Cachorro.php';
require_once 'Gato.php';

$animal = new Animal("Snow");
$cachorro = new Cachorro("Rex");
$gato = new Gato("Luffy");

echo $animal->descrever();

echo $cachorro->descrever();
echo $cachorro->fazBarulho();

echo $gato->descrever();
echo $gato->fazBarulho();