<?php
$insiraNumero = readline('Insira um número para dobrar > ');

function dobrar($numero) {
    return $numero * 2;
}

print "O seu número dobrado é: " .dobrar($insiraNumero);

?>