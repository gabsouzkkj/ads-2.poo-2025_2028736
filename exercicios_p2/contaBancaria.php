<?php

class ContaBancaria
{
    private string $titular;
    private string $cpf;
    private string $agencia;
    private string $numero;
    private float $saldo = 0;

    public function __construct(string $titular, string $cpf, string $agencia, string $numero)
    {
        $this->titular = $titular;
        $this->setCpf($cpf);
        $this->agencia = $agencia;
        $this->numero = $numero;
    }

    // getters e setters
    // gettters -> get -> saída/retorno das informações
    // setters -> set -> entrada e validação das informações
    // para cada atributo preciso de um get e um set

    // setCpf e getCpf estão encapsulando o comportamento de leitura e modifição
    // do CPF da classe
    // podemos chamar de interface de acesso e validação
    

    public function setCpf(string $cpf): bool
    {
        if (!$this->validaCpf($cpf)) {
            return false; 
        } 

        $this->cpf = $cpf;
        return true;
    }

    public function getCpf(): string 
    {
        return $this->cpf;
    }

    public function validaCpf($cpf): bool
    {
        // validação com regex - expressão regular
        if (preg_match('/\D/', $cpf)) {
            return false;
        }

        if (strlen($cpf) != 11) {
            return false;
        } 

        return true;
    }

    public function getTitular(): string {
        return $this->titular;
    }

    public function setTitular(): string {

        $this->titular = $titular;
        return true;
    }

    public function exibirSaldo()
    {
        echo "O saldo da conta {$this->numero} - {$this->agencia}, {$this->titular} é {$this->saldo}<br>";
    }

    public function saque(float $valor)
    {
        if ($valor <= 0) {
            return false;
        } 

        if ($valor > $this->saldo) {
            return false;
        }

        $this->saldo -= $valor;
        return true;
    }

    public function deposito(float $valor)
    {
        if ($valor <= 0) {
            return false;
        } 

        $this->saldo += $valor;
        return true;
    }
}

try {
    $conta01 = new ContaBancaria("João", "123456789111", "25", "0001");

    $conta01->exibirSaldo();
    $conta01->deposito(10);
    $conta01->exibirSaldo();

    $conta01->deposito(200);
    $conta01->exibirSaldo();

    $conta01->saque(18);
    $conta01->exibirSaldo();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}