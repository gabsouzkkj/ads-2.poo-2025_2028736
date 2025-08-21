<?php

$matriz = [
    [1, 1, 0, 1, 1],
    [1, 0, 0, 1, 1],
    [1, 1, 1, 1, 0],
    [0, 1, 1, 1, 1],
    [1, 1, 1, 1, 1]
];

$somarMatriz = 0;
$disponivel = 0;
$lugar = 0;

echo "\n";

foreach ($matriz as $i => $linha) {
    foreach ($linha as $j => $valor) {
        echo $valor . " ";
        
        if ($valor == 0) {
            $disponivel++;
            $lugar = [$i, $j];
        }
    }
    echo PHP_EOL;
}
    
echo "\nLugares disponíveis: " . $disponivel . "\n";
echo "Primeiro lugar vazio: (" . $lugar[0] . "," . $lugar[1] . ") \n";

?>