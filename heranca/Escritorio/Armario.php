<?php

require_once "Gaveta.php";

class Armario
{
    private array $gavetas = [];

    public function getGavetas(): array
    {
        return $this->gavetas;
    }

    public function setGavetas(array $gavetas) {
        if (empty($gavetas)) {
            echo "- A lista de gavetas está vazia!<br>";
        }

        $this->gavetas = $gavetas;
    }    

    public function adicionarGaveta(Gaveta $gaveta)
    {
        if(empty($gaveta)) {
            return "- Nenhuma gaveta adicionada!<br>";
        }

        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta(int $indice): void
    {
        if (empty($this->gavetas)) {
            echo "- A lista de gavetas está vazia!<br>";
            return;
        }
        
        array_splice($this->gavetas, $indice, 1);
        echo "- A gaveta da índice $indice foi removida com sucesso!<br>";
    }

    public function listarGavetas(): array
    {
        if (empty($this->gavetas)) {
            echo "- A lista de gavetas está vazia!<br>";
        }

        return $this->gavetas;
    }
}