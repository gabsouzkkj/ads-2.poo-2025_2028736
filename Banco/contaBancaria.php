<?php

class ContaBancaria {
    private string $numero;
    private float $saldo;
    private Pessoa $titular;

    public function __construct(string $numeroConta, float $saldoInicial, Pessoa $titular) {
        $this->numero = $numeroConta;
        $this->saldo = $saldoInicial;
        $this->titular = $titular;
    }

    public function depositar(float $valor): bool {
        if ($valor <= 0) {
            return false;
        } else {
            $novoSaldo = $this->saldo + $valor;
            $this->saldo = round($novoSaldo, 2);
            return true;
        }
    } 

    public function sacar(float $valor): bool {
        if ($valor <= 0) {
            echo "Valor informado inválido!<br>";
            return false;
        }

        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!<br>";
            return false;
        }

        $novoSaldo = $this->saldo - $valor;
        $this->saldo = round($novoSaldo, 2);
        return true;
    }

    # {getters e setters}
    public function getSaldo(): float {
        return $this->saldo;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function getTitular(): Pessoa {
        return $this->titular;
    }
}