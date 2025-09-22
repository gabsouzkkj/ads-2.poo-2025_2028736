<?php

// Arquivo: filme.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 7 (Filme)

class Filme 
{
    public string $titulo;
    public int $duracaoMin;
    public string $classificacao; 

    public function __construct(string $titulo, int $duracaoMin, string $classificacao) 
    {
        $this->titulo = $titulo;
        $this->duracaoMin = $duracaoMin;
        $this->classificacao = $classificacao;
    }

    public function descricaoCurta(): string 
    {
        return "<br><br>  - $this->titulo <br>- $this->duracaoMin min <br>- Classificação: $this->classificacao";
    }
}

$filme = new Filme ('Teste', 160, '16+');
$filme2 = new Filme ('Teste 2', 60, 'L');

echo "INFORMAÇÕES DO(S) FILME(S)";
echo $filme->descricaoCurta();
echo $filme2->descricaoCurta();