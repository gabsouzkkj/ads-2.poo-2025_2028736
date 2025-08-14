<?php

$insiraNumero = readline('Insira um número > ');

function quadrado($insiraNumero) {
    return $insiraNumero ** 2;
}

function mostrarQuadrado($quadrado) {
    return "O quadrado de $insiraNumero é $quadrado";
}

mostrarQuadrado($insiraNumero);

# deu preguiça, to vendo ainda