<?php

// Arquivo: bancosimples.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 9 (Banco Simples)

class Conta 
{
    public string $numero;
    public string $titular;
    public float $saldo;

    public function __construct(string $numero, string $titular)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = 0.0;
    }

    public function depositar(float $valor): bool {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    public function sacar(float $valor): bool
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function transferir(float $valor, Conta $contaDestino): bool
    {
        if ($this->sacar($valor)) {
            return $contaDestino->depositar($valor);
        }
        return false;
    }

    public function getDadosConta(): string
    {
        return "Conta: {$this->numero} | Titular: {$this->titular} | Saldo: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
    }
}

$conta = new Conta ('0000-000', 'Gabriel Philippe');
$conta2 = new Conta ('0000-001', 'Caroline Moreno');

$conta->saldo = 1000.00;
$conta2->saldo = 100.00;

echo $conta->getDadosConta();
echo $conta2->getDadosConta();

$transferir = 100.00;

if ($conta->transferir($transferir, $conta2)) {
    echo "<br>[$conta->numero] realizou uma transferência de R$ " . $transferir .  " bem-sucedida para a conta [$conta2->numero]. <br>";
} else {
    echo "A Transferência de R$ 100,00 FALHOU.\n";
}
echo "Saldo da conta [$conta->numero] após a transferência é de: R$ " . $conta->saldo . ".<br><br>";

echo $conta->getDadosConta();
echo $conta2->getDadosConta();