<?php

// Arquivo: aluno.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 2 (Aluno)

class Aluno 
{
    public string $nome;
    public string $ra;
    public string $curso;
    public string $disciplina;
    public float $notaP1;
    public float $notaP2;

    public function __construct(string $nome, string $ra, string $disciplina) 
    {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->disciplina = $disciplina;

        $this->curso = "Não encontrado";
        $this->notaP1 = 0.0;
        $this->notaP2 = 0.0;
    }

    public function calcularMedia(): float 
    {
        return ($this->notaP1 + $this->notaP2) / 2;
    }

    public function situacao() 
    {
        $media = $this->calcularMedia();
        if ($media >= 7) {
            return "Aprovado";
        } elseif ($media >= 5) {
            return "Exame";
        } else {
            return "Reprovado";
        }
    }

    public function exibirDados() 
    {
        $media = number_format($this->calcularMedia(), 2, ',', '.');

        echo "INFORMAÇÕES DO ALUNO(A)<br><br>";
        echo "Nome: {$this->nome}<br>";
        echo "RA: {$this->ra}<br>";
        echo "Curso: $this->curso - Disciplina: {$this->disciplina}<br><br>";
        echo "Nota P1: {$this->notaP1}<br>Nota P2: {$this->notaP2}<br>";
        echo "Média: $media - Situação: {$this->situacao()}<br><br>";
    }
}

$aluno = new Aluno ('Gabriel Philippe', '0000000', 'POO');
$aluno->curso = 'ADS';
$aluno->notaP1 = 8.00;
$aluno->notaP2 = 7.00;

$aluno2 = new Aluno ('NicollasRocha', '0000000', 'BANCO DE DADOS');
$aluno2->curso = 'ADS';
$aluno2->notaP1 = 4.00;
$aluno2->notaP2 = 6.00;

echo $aluno->exibirDados();
echo $aluno2->exibirDados();