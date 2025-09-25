<?php

// Nome Gabriel Philippe Souza da Silva
// RA: 2028736

class EstoqueProduto {
    public string $nome;
    public float $precoUnitario;
    public int $quantidade;

    public function __construct(string $nome, float $precoUnitario) {
        $this->nome = $nome;
        $this->precoUnitario = $precoUnitario;
        $this->quantidade = 0;
    }

    public function repor($qtd): void {
        if ($qtd > 0) {
            $this->quantidade += $qtd;
            echo "Reposto [$qtd] unidades do produto {$this->nome} | Estoque atual: [{$this->quantidade}] unidades.<br>";
        } else {
            echo "Quantidade inválida para reposição.<br>";
        }
    }

    public function retirar($qtd): void {
        if ($qtd > 0 && $qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            echo "Retirada [$qtd] unidades do produto $this->nome  | Estoque atual: [{$this->quantidade}] unidades.<br>";
        } else {
            echo "Quantidade inválida para retirada ou estoque insuficiente!<br>";
        }
    }

    public function aplicarDesconto($percentual) {
        if ($percentual > 0 && $percentual < 100) {
            $desconto = $this->precoUnitario * ($percentual / 100);
            $novoPreco = $this->precoUnitario - $desconto;
            if ($novoPreco >= 0) {
                $this->precoUnitario = $novoPreco;
            }
        }
    }

    public function valorEmEstoque() {
        $estoqueQuantidade = $this->precoUnitario * $this->quantidade;
        return "Valor total em estoque do produto: (16.65 * 15 = 249.75) R$ " . number_format($estoqueQuantidade, 2, ',', '.') . "<br>";
    }    
}

$produto = new EstoqueProduto("Café 500g", 18.50);
$produto->repor(20);
$produto->retirar(5);
$produto->aplicarDesconto(10);

echo "<br> Produto: {$produto->nome} | Preço: " . number_format($produto->precoUnitario, 2, ',', '.') . " | Quantidade: [$produto->quantidade unidades]";
echo "<br>" . $produto->valorEmEstoque();
