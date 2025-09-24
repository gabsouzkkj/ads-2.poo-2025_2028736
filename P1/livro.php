<?php

// Arquivo: livro.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 5 (Livro)

class Livro 
{
    public string $titulo;
    public int $paginas;
    public int $paginasLidas;

    public function __construct(string $titulo, int $paginas) 
    {
        $this->titulo = $titulo;
        $this->paginas = $paginas;
        $this->paginasLidas = 0;
    }

    public function verificarProgresso(): string 
    {
        if ($this->paginas < $this->paginasLidas) {
            $this->paginasLidas = $this->paginas;
        }

        $progresso = number_format(($this->paginasLidas / $this->paginas) * 100, 2, ',', '.');
        return "Livro: {$this->titulo} | Páginas: {$this->paginas} | Progresso: $progresso%<br>";
    }
}

$livro = new Livro("O Senhor dos Anéis", 1000);
$livro->paginasLidas = 300;
$livro2 = new Livro("Harry Potter", 800);
$livro2->paginasLidas = 400;
$livro3 = new Livro("O Hobbit", 600);
$livro3->paginasLidas = 601;

echo $livro->verificarProgresso();
echo $livro2->verificarProgresso();
echo $livro3->verificarProgresso();