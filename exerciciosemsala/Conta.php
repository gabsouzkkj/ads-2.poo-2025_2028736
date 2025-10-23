<?php

class Conta 
{
    private string $banco;
    private string $agencia;
    private string $numeroConta;
    private float $saldo = 0.0;

    public function __construct(string $banco, string $agencia, string $numeroConta, float $saldo) 
    {
        $this->setBanco($banco);
        $this->setAgencia($agencia);
        $this->setNumeroConta($numeroConta);
        $this->setSaldo($saldo);
    }

    # GETTERS
    public function getBanco(): string 
    {
        return $this->banco;
    }

    public function getAgencia(): string {
        return $this->agencia;
    }

    public function getNumeroConta(): string {
        return $this->numeroConta;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function getDados()
    {
        echo "Banco: {$this->getBanco()} | Agencia: {$this->getAgencia()} | Número da conta: {$this->getNumeroConta()} | Saldo: R$" . number_format($this->getSaldo(), 2, ',', '.') . "<br>";
    }

    # SETTERS
    public function setBanco(string $banco): void {
        $this->banco = $banco;
    }

    public function setAgencia(string $agencia): void {
        $this->agencia = $agencia;
    }

    public function setNumeroConta(string $numeroConta): void {
        $this->numeroConta = $numeroConta;
    }

    public function setSaldo(string $novoSaldo): void {
        if ($novoSaldo < 0) {
            $this->saldo = 0.0;
        } else {
            $this->saldo = $novoSaldo;
        }
    }

    # METÓDOS
    public function deposito(float $valor)
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("O valor não pode ser negativo ao valor fornecido para saque!");
        }

        if ($this->saldo < $valor) {
            throw new InvalidArgumentException("O valor fornecido para saque deve ser dentro da quantidade do saldo da conta!");
        }

        $this->saldo += $valor;
        return true;
    }

    public function saque(float $valor = 0.0)
    {
        if (empty(trim($valor))) {
            throw new InvalidArgumentException("O valor fornecido não pode ficar vazio!");
        }

        if ($valor <= 0) {
            throw new InvalidArgumentException("O valor não pode ser negativo ao valor fornecido para saque!");
        }

        if ($this->saldo < $valor) {
            throw new InvalidArgumentException("O valor fornecido para saque deve ser dentro da quantidade do saldo da conta!");
        }        

        $this->saldo -= $valor;
        return true;
    }
}

$conta = new Conta("Banco Bradesco S.A.", "237", "4103 9012 3456 7890", 1200000000000000.0);

try {
    $conta->getDados();

    $conta->saque(100.00);
    echo "<br>Sucesso: Ação de saque de R$100 concluída!";
    $conta->deposito(50.00);
    echo "<br>Sucesso: Ação de deposito de R$50 concluída!<br>";

    $conta->setSaldo(-100.00);
    echo "<br>Conta setada em R$-100!<br>";
    $conta->getDados();
} catch (InvalidArgumentException $e) {
    echo "Erro: " . $e->getMessage();
}