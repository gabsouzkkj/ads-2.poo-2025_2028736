<?php
function separarParesEImpares($numeros) {
    $resultado = [
        'pares' => [],
        'impares' => []
    ];

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $resultado['pares'][] = $numero;
        } else {
            $resultado['impares'][] = $numero;
        }
    }

    return $resultado;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$separado = separarParesEImpares($numeros);

print_r($separado);