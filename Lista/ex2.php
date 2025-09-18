<?php

class Produto 
{
    public string $nome;
    public float $preco;

    public function __construct(string $nome, float $preco) 
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
    
    public function aplicarDesconto($preco): float 
    {
        $descontado = $preco * 0.5;
        return $descontado;
    }

    public function exibirPreco(): string 
    {
        $precoDescontado = $this->aplicarDesconto($this->preco);
        return "Nome do produto: {$this->nome}<br> Preço do produto original: {$this->preco} reais (5% descontado: " . number_format($precoDescontado, 2, ',', '.'). " reais)";
    }
}

$produto = new Produto ('Coxinha', 7.00);

echo "INFORMAÇÃO DO PRODUTO<br><br>";
echo $produto->exibirPreco();