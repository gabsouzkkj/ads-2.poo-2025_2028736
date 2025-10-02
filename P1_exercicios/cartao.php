<?php

// Arquivo: cartao.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 3 (Cartao)

class Cartao 
{
    public string $banco;
    public string $bandeira;
    public float $limite;
    public float $fatura;

    public function __construct(string $banco, string $bandeira, float $limite) 
    {
        $this->banco = $banco;
        $this->bandeira = $bandeira;
        $this->limite = $limite;
        $this->fatura = 0.0;
    }

    public function fazerCompra(float $valor): bool 
    {
        if ($valor <= ($this->limite - $this->fatura)) {
            $this->fatura += $valor;
            return true;
        } else {
            return false;
        }
    }

    public function totalFatura(): float 
    {
        return $this->fatura;
    }

    public function exibirDados() 
    {
        echo "INFORMAÇÕES DO CARTÃO<br><br>";
        echo "Banco: {$this->banco}<br>";
        echo "Bandeira: {$this->bandeira}<br><br>";
    }
}

$meu_cartao = new Cartao("Banco do Brasil", "Mastercard", 1000.00);
$meu_cartao->exibirDados();

echo "SIMULAÇÃO DE COMPRAS<br><br>";
echo "Limite inicial: R$ 1.000,00<br><br>";

$compra = 250.00;
echo "Primeira compra:<br>Realizando comprar R$ " . number_format($compra, 2, ',', '.') . ".<br>";
if ($meu_cartao->fazerCompra($compra)) {
    echo "Status: Compra aprovada!<br>";
} else {
    echo "Status: Compra não aprovada. Limite insuficiente!<br>";
}
echo "Fatura atual: R$ " . number_format($meu_cartao->totalFatura(), 2, ',', '.') . "<br><br>";

$compra2 = 800.00;
echo "Segunda compra:<br>Realizando comprar R$ " . number_format($compra2, 2, ',', '.') . ".<br>";
if ($meu_cartao->fazerCompra($compra2)) {
    echo "Status: Compra aprovada!<br>";
} else {
    echo "Status: Compra não aprovada. Limite insuficiente!<br>";
}
echo "<br>Fatura atual: R$ " . number_format($meu_cartao->totalFatura(), 2, ',', '.') . ".<br><br>";

