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
$pessoa3= new Pessoa('Nicollas Rocha', "000.000.000-02");
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

# Adicionando contas para pessoa 1
$pessoa1->adicionarConta($conta1_pessoa1);
$pessoa1->adicionarConta($conta2_pessoa1);
$pessoa1->adicionarConta($conta3_pessoa1);

# Adicionando contas para pessoa 2
$pessoa2->adicionarConta($conta1_pessoa2);
$pessoa2->adicionarConta($conta2_pessoa2);
$pessoa2->adicionarConta($conta3_pessoa2);

# Adicionando contas para pessoa 3
$pessoa3->adicionarConta($conta1_pessoa3);
$pessoa3->adicionarConta($conta2_pessoa3);
$pessoa3->adicionarConta($conta3_pessoa3);

echo "<h2> BRADESCO </h2>";

echo "Titular: {$pessoa1->nome} ({$pessoa1->getCpf()})<br>";
echo "Contas de {$pessoa1->nome}: <br>";
$contas_pessoa1 = $pessoa1->listarContas();
foreach ($contas_pessoa1 as $conta) {
    echo "* Número da conta: " . $conta->getNumero() . "<br>";
    echo "* Saldo: R$" . number_format($conta->getSaldo(), 2) . "<br>";
    echo "<br>";
}

echo "Titular: {$pessoa2->nome} ({$pessoa2->getCpf()})<br>";
echo "Contas de {$pessoa2->nome}: <br>";
$contas_pessoa2 = $pessoa2->listarContas();
foreach ($contas_pessoa2 as $conta) {
    echo "* Número da conta: " . $conta->getNumero() . "<br>";
    echo "* Saldo: R$" . number_format($conta->getSaldo(), 2) . "<br>";
    echo "<br>";
}

echo "Titular: {$pessoa3->nome} ({$pessoa3->getCpf()})<br>";
echo "Contas de {$pessoa3->nome}: <br>";
$contas_pessoa3 = $pessoa3->listarContas();
foreach ($contas_pessoa3 as $conta) {
    echo "* Número da conta: " . $conta->getNumero() . "<br>";
    echo "* Saldo: R$" . number_format($conta->getSaldo(), 2) . "<br>";
    echo "<br>";
}