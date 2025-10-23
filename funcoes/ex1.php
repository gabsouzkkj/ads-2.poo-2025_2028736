<?php
$insiraNome = readline('Insira seu nome > ');

function saudar($nome) {
    return "Olá, $nome! Seja bem-vindo(a).";
}

print saudar($insiraNome);

?>