<?php
$cidades = array(
    "São Paulo",
    "Rio de Janeiro",
    "Belo Horizonte",
    "Porto Alegre",
    "Curitiba" 
);

$pedir_cidade = readline('Busque uma cidade que está na lista > ');

if (in_array($pedir_cidade, $cidades)) {
    echo "Cidade encontrada: $pedir_cidade\n";
} else {
    echo "Cidade não encontrada!\n";
}

?>