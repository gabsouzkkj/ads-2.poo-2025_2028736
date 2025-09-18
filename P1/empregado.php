<?php

class Empregado {
    public string $nome;
    public string $sobrenome;
    public string $setor;
    public float $salarioMensal;

    public function __construct(string $nome, string $sobrenome, string $setor, float $salarioMensal) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->setor = $setor;
        $this->salarioMensal = $salarioMensal;
    }

    public function salarioAnual() {
        return $this->salarioMensal * 12;
    }

    public function exibirDados() {
        $salarioAnual = $this->salarioAnual();

        echo "INFORMAÇÕES DO EMPREGADO(A)<br><br>";
        echo "Nome: {$this->nome}<br>";
        echo "Sobrenome: {$this->sobrenome}<br>";
        echo "Setor: {$this->setor}<br>";
        echo "Salário Mensal: {$this->salarioMensal} - (Salário Anual: $salarioAnual)<br><br>";
    }
}

$pessoa = new Empregado ('Gabriel', 'Philippe', 'Rede de Computadores', 1800.00);
$pessoa2 = new Empregado ('Caroline', 'Moreno', 'Design 3D', 2000.00);

echo $pessoa->exibirDados();
echo $pessoa2->exibirDados();
