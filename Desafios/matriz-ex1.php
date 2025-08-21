<?php

$matriz = [
    [2, 5, 3],
    [1, 0, 4],
    [7, 2, 1]
];

$somarMatriz = 0;
$maior = $matriz[0][0];
$posicaoMaior = [0, 0]; 

echo "Matriz:\n";

foreach ($matriz as $i => $linha) {
    foreach ($linha as $j => $valor) {
        echo $valor . " ";
        
        $somarMatriz += $valor;
        
        if ($valor > $maior) {
            $maior = $valor;
            $posicaoMaior = [$i, $j]; 
        }
    }
    echo PHP_EOL;
}

echo "\nTotal da soma: " . $somarMatriz . "\n";
echo "O maior número é: " . $maior . " na posição: (" . $posicaoMaior[0] . "," . $posicaoMaior[1] . ")";

?>