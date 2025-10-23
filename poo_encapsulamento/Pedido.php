<?php

class Pedido
{
    private string $numeroPedido;
    private array $itens = [];
    private float $valorTotal = 0.0;

    public function __construct(string $numeroPedido)
    {
        $this->setNumeroPedido($numeroPedido);
    }

    # Getters
    public function getNumeroPedido(): string
    {
        return $this->numeroPedido;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    # Setters e Métodos
    public function setNumeroPedido(string $numeroPedido): void
    {
        $numeroPedido = trim($numeroPedido);
        if (empty($numeroPedido)) {
            throw new InvalidArgumentException("O número do pedido não pode ser vazio.");
        }
        $this->numeroPedido = $numeroPedido;
    }

    public function adicionarItem(Produto $produto, int $qtd): void
    {
        if ($qtd <= 0) {
            throw new InvalidArgumentException("A quantidade a ser adicionada deve ser maior que zero.");
        }

        $produto->vender($qtd);

        $nomeProduto = $produto->getNome();
        if (isset($this->itens[$nomeProduto])) {
            $this->itens[$nomeProduto]['qtd'] += $qtd;
        } else {
            $this->itens[$nomeProduto] = [
                'produto' => $produto,
                'qtd' => $qtd,
                'preco' => $produto->getPreco()
            ];
        }

        $this->recalcularValorTotal();
    }

    public function removerItem(string $nomeProduto): void
    {
        if (!isset($this->itens[$nomeProduto])) {
            throw new InvalidArgumentException("Item '{$nomeProduto}' não encontrado no pedido.");
        }

        $item = $this->itens[$nomeProduto];
        $item['produto']->repor($item['qtd']);

        unset($this->itens[$nomeProduto]);

        $this->recalcularValorTotal();
    }

    public function exibirResumo(): string
    {
        echo "<br> Resumo do pedido #{$this->getNumeroPedido()}<br>";
        echo "Itens:<br>";

        foreach ($this->itens as $item) {
            $subtotal = $item['qtd'] * $item['preco'];
            echo "- Nome: {$item['produto']->getNome()} | Quantidade: {$item['qtd']} | Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "<br>";
        }

        $resumo = "<br>Valor Total: R$ " . number_format($this->valorTotal, 2, ',', '.') . "<br>";
        return $resumo;
    }

    public function recalcularValorTotal(): void
    {
        $total = 0.0;
        foreach ($this->itens as $item) {
            $total += $item['qtd'] * $item['preco'];
        }
        $this->valorTotal = $total;
    }
}