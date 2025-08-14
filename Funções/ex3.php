<?php
$insiraNumero = readline('Insira um número > ');
$insiraOutro = readline('Insira outro número > ');

function somar($insiraNumero, $insiraOutro) {
    return $insiraNumero + $insiraOutro;
}

print "A soma dos números [$insiraNumero] e [$insiraOutro] é: " . somar($insiraNumero, $insiraOutro);

?>