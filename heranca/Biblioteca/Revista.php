<?php

require_once 'Acervo.php';

class Revista extends itemAcervo
{
    protected int $edicao;
    protected string $editora;

    public function getEdicao(): string
    {
        return $this->edicao;
    }

    public function setEdicao(int $novaEdicao)
    {
        if(empty($novaEdicao)) {
            echo "A edição não foi definida!";
        }
        $this->edicao = $novaEdicao;
    }

    public function getEditora(): string
    {
        return $this->editora;
    }

    public function setEditora(string $novaEditora)
    {
        if(empty($novaEditora)) {
            echo "A editora não foi definida!";
        }
        $this->editora = $novaEditora;
    }

    public function exibirDetalhe()
    {
        echo "<br><br>(Foi publicado uma Revista):" . parent::exibirDetalhe() . " | Edição: {$this->getEdicao()} | Editora: {$this->getEditora()}";
    }
}