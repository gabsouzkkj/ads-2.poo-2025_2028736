<?php

// Arquivo: terreno.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 6 (Terreno)

class Terreno 
{
    public float $largura;
    public float $comprimento;
    public float $precoPorMetro;

    public function __construct(float $largura, float $comprimento, float $precoPorMetro) 
    {
        $this->largura = $largura;
        $this->comprimento = $comprimento;
        $this->precoPorMetro = $precoPorMetro;
    }

    public function area(): float 
    {
        return $this->largura * $this->comprimento;
    }

    public function precoTotal(): float 
    {
        $preco = $this->area() * $this->precoPorMetro;

        echo "INFORMAÇÕES DO TERRENO<br><br>";
        echo "Área do terreno: " . number_format($this->area(), 2, ',', '.') . " m²<br>";
        echo "Preço total do terreno: R$ " . number_format($preco, 2, ',', '.') . "<br><br><br>";
        return $preco;
    }
}

$terreno = new Terreno(10.0, 20.0, 50.0);
$terreno2 = new Terreno(15.0, 25.0, 60.0);

$terreno->precoTotal();
$terreno2->precoTotal();