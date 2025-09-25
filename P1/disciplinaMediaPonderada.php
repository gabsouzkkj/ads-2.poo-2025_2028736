<?php

// Arquivo: disciplinaMediaPonderada.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 11 (Disciplina com Média Ponderada)

class Aluno {
    public string $nomeAluno;

    public function __construct(string $nomeAluno) {
        $this->nomeAluno = $nomeAluno;
    }

    public function exibirNome(): void {
        echo "Nome do Aluno: {$this->nomeAluno} <br>";
    }
}

class Disciplina {

    public string $nome;
    public float $notaTrabalho;
    public float $notaProva;
    
    public function __construct(string $nome, float $notaTrabalho, float $notaProva) {
        $this->nome = $nome;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;
    }
    
    public function calcularMediaPonderada(): float {
        return ($this->notaTrabalho * 0.4) + ($this->notaProva * 0.6);
    }
    
    public function situacao(): string {
        $media = $this->calcularMediaPonderada();
        if ($media >= 7.0) {
            return "Aprovado";
        } elseif ($media >= 5.0) {
            return "Exame";
        } else {
            return "Reprovado";
        }
    }

    public function exibirInformacoes(Aluno $nomeAluno): void {
        echo "INFORMAÇÕES DAS DISCIPLINAS<br><br>";
        
        echo "Disciplina: {$this->nome} <br>";
        echo "{$nomeAluno->exibirNome()}<br>";
        echo "Nota do Trabalho: {$this->notaTrabalho} | Nota da Prova: {$this->notaProva}<br>";
        echo "Média: {$this->calcularMediaPonderada()} <br>";
        echo "Situação: {$this->situacao()} <br><br>" ;
    }
}

$aluno = new Aluno("Gabriel Philippe Souza da Silva");

$matematica = new Disciplina("Matemática", 8.5, 7.0);
$portugues = new Disciplina("Português", 5.0, 6.5);

echo $matematica->exibirInformacoes($aluno);
echo $portugues->exibirInformacoes($aluno);