<?php

class ContaCorrente extends ContaBancaria
{
    private float $limite;

    public function __construct(string $titular, float $limite)
    {
        $this->setTitular($titular);
        $this->setSaldo(0.0);
        $this->limite = $limite;
    }

    public function getLimite(): float
    {
        return $this->limite;
    }
    
    public function sacar(float $valor): void
    {
        if ($valor > 0 && $valor <= ($this->getSaldo() + $this->getLimite())) {
            $novoSaldo = $this->getSaldo() - $valor;
            $this->setSaldo($novoSaldo);
        } else {
            echo "Saldo insuficiente ou valor de saque inválido!<br>";
        }
    }
}