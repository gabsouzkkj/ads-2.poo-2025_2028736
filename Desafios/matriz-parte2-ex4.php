<?php
$insiraX = readline('Insira o número que está atrás de buscar > ');

$numerosNX = [10, 20, 30, 40, 50];

if (in_array($insiraX, $numerosNX)) {
    $posicao = array_search($insiraX, $numerosNX);
    echo 'Número encontrado e está na posição: ' . $posicao;
} else {
    echo 'Número não encontrado!';
}



