<?php

function contarElementos($array) {
    return count($array);
}

$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Morango", "Abacaxi"];

$quantidade = contarElementos($frutas);
echo "A lista contém $quantidade frutas!";

echo ("\nFrutas no array:\n");
foreach ($frutas as $value) {
    print "- $value\n";
}
?>