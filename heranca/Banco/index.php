<?php

require_once 'ContaBancaria.php';
require_once 'ContaPoupanca.php';
require_once 'ContaCorrente.php';

// # =================
// # Conta Bancaria
// # =================
// echo "CONTA BANCARIA<br>";
// $contaBancaria = new ContaBancaria("Alice", 1000.0);
// echo $contaBancaria->getDados() . "<br>";

// $contaBancaria->depositar(500.0);
// echo "* Deposito de R$ 500,00 realizado. <br>";
// echo $contaBancaria->getDados() . "<br>";

// $contaBancaria->sacar(200.0);
// echo "* Saque de R$ 200,00 realizado. <br>";
// echo $contaBancaria->getDados() . "<br><br>";


// # =================
// # Conta Bancaria - Ações Inválidas
// # =================
// echo "<br>" . $contaBancaria->getDados() . "<br>";
// echo "* Saque de R$ 2000,00 (inválido): <br>";
// $contaBancaria->sacar(2000.0); # Teste de saque inválido

// echo "<br>* Depósito de R$ -100,00 (inválido): <br>";
// $contaBancaria->depositar(-100.0); # Teste de depósito inválido


// # ================
// # Conta Corrente
// # ================
// echo "<br><br>CONTA CORRENTE<br>";
// $contaCorrente = new ContaCorrente("Bruno Lima", 500.00);
// $contaCorrente->depositar(500.00);
// echo $contaCorrente->getDados() . " | Limite: R$ " . number_format($contaCorrente->getLimite(), 2, ',', '.') . "<br>";


// $contaCorrente->getLimite();
// $contaCorrente->sacar(600.00);
// echo "<br>* Saque de R$ 1800,00 realizado. <br>";
// echo $contaCorrente->getDados() . "<br><br>";


// # =================
// # Conta Poupança
// # =================
// echo "<br><br>CONTA POUPANÇA<br>";
// $contaPoupanca = new ContaPoupanca("Ana Souza", 1000.00);
// echo $contaPoupanca->getDados() . "<br>";

// $contaPoupanca->depositar(300.00);
// echo "* Depósito de R$ 300,00 realizado. <br>";

// echo $contaPoupanca->getDados() . "<br><br>";
// $contaPoupanca->renderJuros(5.0);
// echo "<br>" . $contaPoupanca->getDados() . "<br><br>";

$contaCorrente = new ContaCorrente("Carlos Silva", 500.00); 
echo "* Conta Corrente criada para " . $contaCorrente->getTitular() . " com limite de R$ " . number_format($contaCorrente->getLimite(), 2, ',', '.') . ".<br>";
$contaPoupanca = new ContaPoupanca("Mariana Costa", 1000.00);
echo "* Conta Poupança criada para " . $contaPoupanca->getTitular() . ".<br><br>";

$contaCorrente->depositar(800.00);
echo "* Depósito de R$ 800,00 realizado. <br>";
$contaPoupanca->depositar(400.00);
echo "* Depósito de R$ 400,00 realizado. <br><br>";

echo $contaCorrente->getDados() . " | Limite: R$ " . number_format($contaCorrente->getLimite(), 2, ',', '.');
$contaCorrente->sacar(1000.00);
echo "<br>* Saque de R$ 1000,00 realizado. <br>";
echo $contaCorrente->getDados() . "<br><br>";

$contaPoupanca->renderJuros(5.0);
echo $contaPoupanca->getDados() . "<br>";
