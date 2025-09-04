<?php

require_once "pessoa.php";
require_once "contaBancaria.php";

# Pessoa 1
$pessoa1 = new Pessoa('Gabriel Philippe', "000.000.000-00");
# Contas
$conta1_pessoa1 = new ContaBancaria('000123-0', 100.00, $pessoa1);
$conta2_pessoa1 = new ContaBancaria('000123-1', 130.00, $pessoa1);
$conta3_pessoa1 = new ContaBancaria('000123-2', 230.00, $pessoa1);
# Ações
$conta1_pessoa1->depositar(50.00);
$conta1_pessoa1->sacar(10.00);

$conta2_pessoa1->depositar(50.00);
$conta2_pessoa1->sacar(10.00);

$conta3_pessoa1->depositar(50.00);
$conta3_pessoa1->sacar(10.00);

# Pessoa 2
$pessoa2 = new Pessoa('Caroline Moreno', "000.000.000-01");
# Contas
$conta1_pessoa2 = new ContaBancaria('000123-3', 200.00, $pessoa2);
$conta2_pessoa2 = new ContaBancaria('000123-4', 230.00, $pessoa2);
$conta3_pessoa2 = new ContaBancaria('000123-5', 330.00, $pessoa2);
# Ações
$conta1_pessoa2->depositar(50.00);
$conta1_pessoa2->sacar(10.00);

$conta2_pessoa2->depositar(50.00);
$conta2_pessoa2->sacar(10.00);

$conta3_pessoa2->depositar(50.00);
$conta3_pessoa2->sacar(10.00);

# Pessoa 3
$pessoa3= new Pessoa('Martin', "000.000.000-02");
# Contas
$conta1_pessoa3 = new ContaBancaria('000123-6', 300.00, $pessoa3);
$conta2_pessoa3 = new ContaBancaria('000123-7', 330.00, $pessoa3);
$conta3_pessoa3 = new ContaBancaria('000123-8', 430.00, $pessoa3);
# Ações
$conta1_pessoa3->depositar(50.00);
$conta1_pessoa3->sacar(10.00);

$conta2_pessoa3->depositar(50.00);
$conta2_pessoa3->sacar(10.00);

$conta3_pessoa3->depositar(50.00);
$conta3_pessoa3->sacar(10.00);

$pessoa1->adicionarConta($conta1_pessoa1, $conta2_pessoa1, $conta3_pessoa1);
$pessoa2->adicionarConta($conta1_pessoa2, $conta2_pessoa2, $conta3_pessoa2);
$pessoa3->adicionarConta($conta1_pessoa3, $conta2_pessoa3, $conta3_pessoa3);

echo "Titular: {$pessoa1->nome} ($pessoa1->cpf)<br>";
echo "Número da conta: " . $conta1_pessoa1->getNumero() . "<br>";
echo "Saldo: R$" . number_format($conta1_pessoa1->getSaldo(), 2) . "<br>";
echo "Contas: <br>";

echo "<br>";
echo "Titular: {$pessoa2->nome} ($pessoa2->cpf)<br>";
echo "Número da conta: " . $conta2_pessoa2->getNumero() . "<br>";
echo "Saldo: R$" . number_format($conta2_pessoa2->getSaldo(), 2) . "<br>";
echo "Contas: <br>";

echo "<br>";
echo "Titular: {$pessoa3->nome} ($pessoa3->cpf)<br>";
echo "Número da conta: " . $conta3_pessoa3->getNumero() . "<br>";
echo "Saldo: R$" . number_format($conta3_pessoa3->getSaldo(), 2) . "<br>";
echo "Contas: <br>";