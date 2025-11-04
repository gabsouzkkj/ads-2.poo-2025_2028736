<?php

class ContaPoupanca extends ContaBancaria
{
    public function renderJuros(float $taxa): void
    {
        if ($taxa > 0) {
            $juros = $this->getSaldo() * ($taxa / 100);
            $saldo = $this->getSaldo() + $juros;
            $this->setSaldo($saldo);

            echo "Rendimento de R$ " . number_format($juros, 2, ',', '.') . " aplicado (Taxa: " . $taxa . "%). " . "<br>";
        } else {
            echo "Taxa de juros inválida.\n";
        }
    }
}