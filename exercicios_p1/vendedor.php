<?php

// Arquivo: vendedor.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 4 (Vendedor)

class Vendedor 
{
    public string $nome;
    public string $email;
    public float $salarioBase;
    public float $percentualComissao;
    public float $totalVendido;

    public function __construct(string $nome, string $email, float $salarioBase, float $percentualComissao) 
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->salarioBase = $salarioBase;
        $this->percentualComissao = $percentualComissao;
        $this->totalVendido = 0.0;
    }

    public function fazerVenda(float $valor): bool 
    {
        if ($valor > 0) {
            $this->totalVendido += $valor;
            return true;
        } else {
            return false;
        }
    }

    public function salarioTotal() 
    {
        return $this->salarioBase + ($this->totalVendido * $this->percentualComissao);
    }

    public function exibirDados() 
    {
        $salarioBase = number_format($this->salarioBase, 2, ',', '.');
        $totalVendido = number_format($this->totalVendido, 2, ',', '.');
        $salarioTotal = number_format($this->salarioTotal(), 2, ',', '.');

        echo "INFORMAÇÕES DO VENDEDOR(A)<br><br>";
        echo "Nome: {$this->nome}<br>";
        echo "Email: {$this->email}<br>";
        echo "<br>Salário Base: R$ $salarioBase<br>";
        echo "Total Vendido: R$ $totalVendido<br>";
        echo "Salário Total (com comissão): R$ $salarioTotal<br><br>";
    }
}

$vendedor = new Vendedor ('Gabriel Philippe', 'gabrielphilippe@gmail.com' , 1500.00, 0.05);
$vendedor2 = new Vendedor ('Samuel Gonçalves', 'samuelgonçalves@gmail.com' , 1600.00, 0.05);
$vendedor3 = new Vendedor ('Gabriel Bezerra', 'gabrielbezerra@gmail.com' , 1700.00, 0.05);

echo $vendedor->exibirDados();
echo $vendedor2->exibirDados();
echo $vendedor3->exibirDados();

echo "<br>VENDAS DO MÊS<br><br>";

$venda = 2000.00;
echo "Vendedor: {$vendedor->nome}<br>";
if ($vendedor->fazerVenda($venda)) {
    echo "Venda de R$ " . number_format($venda, 2, ',', '.') . " realizada com sucesso.<br><br>";
} else {
    echo "Não foi possível realizar a venda de R$ " . number_format($venda, 2, ',', '.') . ". O valor é inválido.<br><br>";
}

$venda2 = 1500.00;
echo "Vendedor: {$vendedor2->nome}<br>";
if ($vendedor2->fazerVenda($venda2)) {
    echo "Venda de R$ " . number_format($venda2, 2, ',', '.') . " realizada com sucesso.<br><br>";
} else {
    echo "Não foi possível realizar a venda de R$ " . number_format($venda2, 2, ',', '.') . ". O valor é inválido.<br><br>";
}

$venda3 = 3000.00;
echo "Vendedor: {$vendedor3->nome}<br>";
if ($vendedor3->fazerVenda($venda3)) {
    echo "Venda de R$ " . number_format($venda3, 2, ',', '.') . " realizada com sucesso.<br><br>";
} else {
    echo "Não foi possível realizar a venda de R$ " . number_format($venda3, 2, ',', '.') . ". O valor é inválido.<br><br>";
}