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

    public function depositar(float $valor): bool 
    {
        if ($valor <= 0) {
            return false;
        } else {
            $novoSaldo = $this->saldo + $valor;
            $this->saldo = round($novoSaldo, 2);
            return true;
        }
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
            if ($contaDestino->depositar($valor)) {
                return true;
            } else {
                $this->depositar($valor);
                echo "Erro na transferência: Falha ao depositar. Saldo revertido.\n";
                return false;
            }
        } else {
            echo "Erro na transferência: Falha ao sacar da conta de origem.\n";
            return false;
        }
    }

    public function exibirDados() {
        echo "INFORMAÇÕES DA CONTA:";

        echo "<br><br>Títular: $this->titular";
        echo "<br>Número da conta: $this->numero<br>";
        echo "Saldo: $this->saldo<br><br>";
    }
}

$conta = new Conta ('0000-000', 'Gabriel Philippe', 8200.00);
$conta2 = new Conta ('0000-001', 'Caroline Moreno', 1200.00);

$conta->depositar(120.00);
$conta2->depositar(620.00);

$conta->sacar(430.00);
$conta2->sacar(230.00);

echo $conta->exibirDados();
echo $conta2->exibirDados();
