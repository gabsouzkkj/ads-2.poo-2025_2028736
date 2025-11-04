<?php

class ContaBancaria 
{
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldoInicial = 0.0) 
    {
        if ($saldoInicial < 0) {
            echo "O saldo inicial não pode ser negativo!<br>";
        }

        $this->setTitular($titular);
        $this->setSaldo($saldoInicial);
    }

    public function getTitular(): string 
    {
        return $this->titular;
    }

    public function getSaldo(): float 
    {
        return $this->saldo;
    }

    public function getDados(): string {
        return "Titular: {$this->getTitular()} | Saldo: R$ " . number_format($this->getSaldo(), 2, ',', '.');
    }

    public function setTitular(string $novoTitular): void 
    {
        $this->titular = $novoTitular;
    }

    public function setSaldo(float $novoSaldo): void 
    {
        $this->saldo = $novoSaldo;
    }

    public function depositar(float $valor): void 
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "Valor de depósito inválido!<br>";
        }
    }

    public function sacar(float $valor): void 
    {
        if ($valor > 0 && $valor <= $this->getSaldo()) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente ou valor de saque inválido!<br>";
        }
    }
}