<?php
$itens = [
    ["nome" => "Arroz 5kg", "preco" => 25.90, "quantidade" => 2],
    ["nome" => "Feijão 1kg", "preco" => 7.50, "quantidade" => 3],
    ["nome" => "Café 500g", "preco" => 12.80, "quantidade" => 1],
];

$possuiFidelidade = true;

function calcularSubtotal($preco, $quantidade) {
    return $preco * $quantidade;
}

function calcularTotalCompra($itens) {
    $total = 0;
    foreach ($itens as $item) {
        $total += calcularSubtotal($item['preco'], $item['quantidade']);
    }
    return $total;
}

function aplicarDesconto($total, $possuiFidelidade) {
}


function gerarCupom($itens, $possuiFidelidade) {
}

# algum momento continuo