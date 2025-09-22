<?php

// Arquivo: item_pedido.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 8 (Item de Pedido)

class ProdutoSimples 
{
    public string $nome;
    public float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class ItemPedido 
{
    public ProdutoSimples $produto;
    public int $quantidade;

    public function __construct(ProdutoSimples $produto, int $quantidade)
    {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function subtotal(): float
    {
        return $this->produto->preco * $this->quantidade;
    }
}

$teclado = new ProdutoSimples("Teclado Gamer", 250.00);
$mouse = new ProdutoSimples("Mouse Sem Fio", 120.50);
$monitor = new ProdutoSimples("Monitor Ultrawide", 1500.00);

$item = new ItemPedido($teclado, 2);
$item2 = new ItemPedido($mouse, 3);
$item3 = new ItemPedido($monitor, 1);

echo "Item 1: " . $item->produto->nome . " (x" . $item->quantidade . ")<br>";
echo "Subtotal: R$" . number_format($item->subtotal(), 2, ',', '.') . "<br>";
echo "<hr>";

echo "Item 2: " . $item2->produto->nome . " (x" . $item2->quantidade . ")<br>";
echo "Subtotal: R$" . number_format($item2->subtotal(), 2, ',', '.') . "<br>";
echo "<hr>";

echo "Item 3: " . $item3->produto->nome . " (x" . $item3->quantidade . ")<br>";
echo "Subtotal: R$" . number_format($item3->subtotal(), 2, ',', '.') . "<br>";