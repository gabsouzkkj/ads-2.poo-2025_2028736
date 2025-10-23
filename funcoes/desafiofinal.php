<?php
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
    if ($possuiFidelidade) {
        return $total * 0.90;
    } else {
        return $total;
    }
}


function gerarCupom($itens, $possuiFidelidade) {
    $totalBruto = calcularTotalCompra($itens);
    $totalFinal = aplicarDesconto($totalBruto, $possuiFidelidade);
    $desconto = $totalBruto - $totalFinal;

    echo "\n\n🛒: Cupom Fiscal\n";
    foreach ($itens as $item) {
        $subtotal = calcularSubtotal($item['preco'], $item['quantidade']);
        echo " 1. Produto: {$item['nome']}.\n";
        echo " 2. Preço Único: R$ " . number_format($item['preco'], 2, ',', '.') . ".\n";
        echo " 3. Quantidade: " . $item['quantidade'] . ".\n";
        echo " - Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . ".\n\n";
    }

    echo "🧾: Resumo\n";
    echo " - Total Bruto: R$ " . number_format($totalBruto, 2, ',', '.') . ".\n";
    echo " - Total Final: R$ " . number_format($totalFinal, 2, ',', '.') . ".\n";
    
    
    if ($possuiFidelidade) {
        echo " - Descontado [10%]: R$ -" . number_format($desconto, 2, ',', '.') . ".\n\n";
    } else {
        echo " - Não houve desconto aplicado!\n\n";
    }
}

$itens = []; 
$produtosDisponiveis = [
    "1" => ["nome" => "Maçã", "preco" => 5.99],
    "2" => ["nome" => "Banana", "preco" => 3.50],
    "3" => ["nome" => "Alface", "preco" => 2.99],
    "4" => ["nome" => "Tomate", "preco" => 4.80],
    "5" => ["nome" => "Peito de Frango", "preco" => 12.90],
    "6" => ["nome" => "Carne Moída", "preco" => 22.50],
    "7" => ["nome" => "Picanha", "preco" => 59.90],
    "8" => ["nome" => "Linguiça", "preco" => 18.75],
    "9" => ["nome" => "Arroz Tipo 1 Valle Branco 5kg", "preco" => 24.90],
    "10" => ["nome" => "Feijão Carioca Pedretti 1kg", "preco" => 8.99],
    "11" => ["nome" => "Óleo de Soja Soya Pet 900ml", "preco" => 7.49],
    "12" => ["nome" => "Açúcar Santaisabel 5kg", "preco" => 4.25],
    "13" => ["nome" => "Pão Francês", "preco" => 12.00],
    "14" => ["nome" => "Bolo Caseiro", "preco" => 6.50],
    "15" => ["nome" => "Rosca Doce", "preco" => 5.00],
    "16" => ["nome" => "Leite Itambé 1L", "preco" => 5.20],
    "17" => ["nome" => "Queijo Mussarela", "preco" => 28.90],
    "18" => ["nome" => "Iogurte Natural", "preco" => 3.75],
    "19" => ["nome" => "Refrigerante 2L", "preco" => 8.99],
    "20" => ["nome" => "Suco Integral 1L", "preco" => 9.80],
    "21" => ["nome" => "Água Mineral 500ml", "preco" => 2.50]
];

echo "\n☀️ : Mercadinho Bom Dia";
echo "\n🛒: Seja bem-vindo(a) ao Mercadinho Bom Dia! 
Seu mercado de confiança com hortifruti fresco, açougue, básicos, 
laticínios e tudo que sua família precisa com qualidade e preço justo!\n";
echo "\n➕: Lista de produtos abaixo:\n";

while (true) {
    foreach ($produtosDisponiveis as $codigo => $produto) {
        echo " $codigo. {$produto['nome']} - (R$ {$produto['preco']} reais)\n";
    }

    $escolha = readline("\nDigite o código do produto (ou '0' para finalizar) > ");

    if ($escolha == 0) {
        break;
    }

    if (!isset($produtosDisponiveis[$escolha])) {
        echo "\n❌: Código inválido. Tente novamente!\n";
        continue;
    }

    $quantidade = (int)readline("Quantidade de {$produtosDisponiveis[$escolha]['nome']} > ");

    if ($quantidade < 1) {
        echo "\n❌: Quantidade inválida. Tente novamente!\n";
        continue;
    }

    $itens[] = [
        "nome" => $produtosDisponiveis[$escolha]['nome'],
        "preco" => $produtosDisponiveis[$escolha]['preco'],
        "quantidade" => $quantidade
    ];
    
    echo "\n✅: {$produtosDisponiveis[$escolha]['nome']} x{$quantidade} adicionado(s)!\n";
}

if (empty($itens)) {
    echo "⚠️: Carrinho vazio. Nenhuma compra realizada!\n";
} else {
    $possuiFidelidade = strtolower(readline("🪪: Possui cartão fidelidade? (S/N) > ")) == 's';
    gerarCupom($itens, $possuiFidelidade);
}

?>