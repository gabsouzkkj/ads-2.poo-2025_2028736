<?php
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($matriz as $linha) {
    foreach ($linha as $coluna) {
        echo " [$coluna] ";
    }
    echo PHP_EOL;
}

$todos_numeros = array_merge(...$matriz);
$numeros_unicos = array_unique($todos_numeros);

if (count($todos_numeros) === 9 && count($numeros_unicos) === 9 && max($todos_numeros) <= 9 &&  min($todos_numeros) >= 1) {
    echo "\nSudoku válido";
} else {
    echo "\nSudoku inválido";
}

?>