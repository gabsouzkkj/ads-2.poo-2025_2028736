<?php

require_once '../conta.php';

try {
    $conta = new Conta("Banco Bradesco S.A.", "237", "4103 9012 3456 7890", 1200000000000000.0);
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