<?php

class ContaBancaria 
{
    public string $titular;
    public float $saldo;

    public function __construct(string $titular, float $saldo) 
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function sacar(float $valor): bool 
    {
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

    public function exibirSaldo(): string 
    {
        $saldo = $this->saldo;
        return "Títular: {$this->titular}<br>Saldo: " . number_format($saldo, 2, ',', '.');
    }
}

$cliente = new ContaBancaria ('Gabriel Philippe Souza da Silva', 10500.00);
$cliente->depositar(50.00);
$cliente->sacar(10.00);

echo "INFORMAÇÕES DO CLIENTE <BR><BR>";
echo $cliente->exibirSaldo();