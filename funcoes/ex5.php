<?php
$insiraNumero = readline('Insira um número: ');

function quadrado($insiraNumero) {
    return $insiraNumero ** 2;
}

function mostrarQuadrado($insiraNumero) {
    $quadrado = quadrado($insiraNumero);
    echo "O quadrado do número é: $quadrado ";
}

mostrarQuadrado($insiraNumero);