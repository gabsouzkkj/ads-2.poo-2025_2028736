<?php

require_once 'Acervo.php';

class MidiaDigital extends itemAcervo
{
    protected string $formato;

    public function getFormato(): string
    {
        return $this->formato;
    }

    public function setFormato(string $novoFormato)
    {
        if(empty($novoFormato)) {
            echo "O formato não foi definido!";
        }
        $this->formato = $novoFormato;
    }

    public function exibirDetalhe()
    {
        echo "<br><br>(Foi publicado uma Mídia Digital):" . parent::exibirDetalhe() .  "| Formato: {$this->getFormato()}";
    }
}