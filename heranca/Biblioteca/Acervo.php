<?php

class itemAcervo
{
    protected string $titulo;
    protected int $anoPublicacao;

    public function __construct(string $titulo, int $anoPublicacao)
    {
        $this->setTitulo($titulo);
        $this->setAnoPublicacao($anoPublicacao);
    }

    public function setTitulo(string $novoTitulo)
    {
        if(empty($novoTitulo)) {
            echo "O título não foi definido!";
        }
        $this->titulo = $novoTitulo;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setAnoPublicacao(int $novoAno)
    {
        if(empty($novoAno)) {
            echo "O ano não foi definido!";
        }
        $this->anoPublicacao = $novoAno;
    }

    public function getAnoPublicacao(): int
    {
        return $this->anoPublicacao;
    }

    public function exibirDetalhe()
    {
        return "<br>Título: {$this->titulo} | Ano de publicação: {$this->anoPublicacao}";
    }
}