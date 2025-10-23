<?php
$insiraNome = readline('Insira seu nome > ');
$insiraNota = (int)readline('Insira sua primeira nota > ');
$insiraNota2 = (int)readline('Insira sua segunda nota > ');
$insiraNota3 = (int)readline('Insira sua terceira nota > ');

function calcularMedia($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3) / 3;
    return $media;
}

function resultadoAluno($nome, $n1, $n2, $n3) {
    $media = calcularMedia($n1, $n2, $n3);
    if ($media >= 7 ) {
        echo "O aluno $nome, obteve média $media e está APROVADO.";
    } elseif ($media >= 4 && $media < 7) {
        echo "O aluno $nome, obteve média $media e está de RECUPERAÇÃO.";
    } else {
        echo "O aluno $nome, obteve média $media e está REPROVADO.";
    }
}


print resultadoAluno($insiraNome, $insiraNota, $insiraNota2, $insiraNota3);