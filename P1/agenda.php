<?php

// Arquivo: agenda.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 2 (Agenda de Compromissos)

class Compromisso 
{
    public string $titulo;
    public string $inicio;
    public string $fim;

    public function __construct(string $titulo, string $inicio, string $fim)
    {
        $this->titulo = $titulo;
        $this->inicio = $inicio;
        $this->fim = $fim;
    }
}

class Agenda 
{
    public array $compromissos;

    public function duracaoMin() {
        
    }
}
