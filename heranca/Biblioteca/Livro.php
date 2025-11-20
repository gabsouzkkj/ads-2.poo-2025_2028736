<?php

require_once 'Acervo.php';

class Livro extends itemAcervo
{
    protected string $autor;
    protected string $isbn;

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $novoAutor)
    {
        if(empty($novoAutor)) {
            echo "O autor não foi definido!";
        }
        $this->autor = $novoAutor;
    }

    public function getISBN(): string
    {
        return $this->isbn;
    }

    public function setISBN(string $novaISBN)
    {
        if(empty($novaISBN)) {
            echo "A ISBN não foi definida!";
        }
        $this->isbn = $novaISBN;
    }

    public function exibirDetalhe()
    {
        echo "(Foi publicado um Livro):" . parent::exibirDetalhe() . " | Ano de publicação: {$this->getAnoPublicacao()} | Autor: {$this->getAutor()} | ISBN: {$this->getISBN()}";
    }
}