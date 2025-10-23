<?php
$insiraNota = readline('Insira sua primeira nota > ');
$insiraOutra = readline('Insira sua outra nota > ');

$nota = $insiraNota + $insiraOutra / 2;


function verificarAprovacao($nota) {
    if ($nota >= 7) {
        return "$nota: Aprovado!";
    } elseif ($nota >= 5) {
        return "$nota: Recuperação!";
    } else {
        return "$nota: Reprovado!";
    }
} 

print verificarAprovacao($nota);