<?php

class Item
{
    protected string $nome;
    protected int $tamanho;
    protected string $classe;

    public function __construct(string $nome, int $tamanho, string $classe)
    {
        $this->setNome($nome);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $nome = trim($nome);
        if (empty($nome)) {
            $nome = 'Sem nome';
        }
        $this->nome = $nome;
    }

    public function getClasse(): string
    {
        return $this->classe;
    }

    public function setClasse(string $classe)
    {
        $classe = trim($classe);
        if (empty($classe)) {
            $classe = 'Sem descrição';
        }
        $this->classe = $classe;
    }

    public function getTamanho(): int 
    {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void
    {
        if ($tamanho < 0) {
            $tamanho = 0;
        }
        $this->tamanho = $tamanho;
    }
}