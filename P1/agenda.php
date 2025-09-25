<?php

// Arquivo: agenda.php
// Autor: Gabriel Philippe Souza da Silva 2028736 — Turma C
// Descrição: Implementação do exercício 10 (Agenda de Compromissos)

class Compromisso 
{
    public $titulo;
    public $inicio;
    public $fim;

    public function __construct(string $titulo, string $inicio, string $fim) 
    {
        $this->titulo = $titulo;
        $this->inicio = $inicio;
        $this->fim = $fim;
    }

    public function converterParaMinutos(string $horaStr): int 
    {
        list($horas, $minutos) = explode(':', $horaStr);
        return (int)$horas * 60 + (int)$minutos;
    }

    public function duracaoMin(): int 
    {
        $inicioMin = $this->converterParaMinutos($this->inicio);
        $fimMin = $this->converterParaMinutos($this->fim);
        return $fimMin - $inicioMin;
    }
}

class Agenda {
    public array $compromissos = [];

    public function verificaSobreposicao(Compromisso $novoCompromisso): bool 
    {
        $inicioNovo = $novoCompromisso->converterParaMinutos($novoCompromisso->inicio);
        $fimNovo = $novoCompromisso->converterParaMinutos($novoCompromisso->fim);

        foreach ($this->compromissos as $compromissoExistente) {
            $inicioExistente = $compromissoExistente->converterParaMinutos($compromissoExistente->inicio);
            $fimExistente = $compromissoExistente->converterParaMinutos($compromissoExistente->fim);

            if ($inicioNovo < $fimExistente && $fimNovo > $inicioExistente) {
                return true;
            }
        }
        return false;
    }

    public function adicionar(Compromisso $compromisso): bool 
    {
        if ($this->verificaSobreposicao($compromisso)) {
            echo "ERRO: Não foi possível adicionar [{$compromisso->titulo}]. Horário sobreposto!<br>";
            return false;
        } else {
            $this->compromissos[] = $compromisso;
            echo "[{$compromisso->titulo}] adicionado com sucesso.<br>";
            echo "- A duração de [{$compromisso->titulo}] é de {$compromisso->duracaoMin()} minutos.<br><br>";
            return true;
        }
    }

    public function listar(): array 
    {
        usort($this->compromissos, function($a, $b) {
            return $a->inicio <=> $b->inicio;
        });
        return $this->compromissos;
    }
}

$minhaAgenda = new Agenda();

$compromisso = new Compromisso("Reunião com o time", "09:00", "10:30");
$compromisso2 = new Compromisso("Almoço", "12:00", "13:00");
$compromisso3 = new Compromisso("Ligar para o cliente", "15:00", "15:45");
$compromisso4 = new Compromisso("Café com a Ana", "10:00", "11:00");  
$compromisso5 = new Compromisso("Finalizar relatório", "11:00", "12:30"); 
$compromisso6 = new Compromisso("Academia", "18:00", "19:00");

echo "ADICIONANDO COMPROMISSOS NA AGENDA:<br><br>";
$minhaAgenda->adicionar($compromisso);
$minhaAgenda->adicionar($compromisso2);
$minhaAgenda->adicionar($compromisso3);
$minhaAgenda->adicionar($compromisso4);
$minhaAgenda->adicionar($compromisso5);
$minhaAgenda->adicionar($compromisso6);

echo "COMPROMISSOS NA AGENDA (ordenados por horário de início):<br><br>";
foreach ($minhaAgenda->listar() as $compromisso) {
    echo "Título: {$compromisso->titulo} | Início: {$compromisso->inicio} | Fim: {$compromisso->fim}<br>";
}