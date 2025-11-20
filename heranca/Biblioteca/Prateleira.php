<?php

class Prateleira
{
    protected array $itens = [];

    public function getItens(): array
    {
        return $this->itens;
    }
    public function adicionarItem(itemAcervo $item) {
        if(empty($item)) {
            echo "O(s) item(ns) não foram definido(s)!";
        }
        $this->itens[] = $item;
    }

    public function removerItem(string $titulo): void 
    {
        if(empty($this->itens)) {
            echo "Não contém itens para remover!";
        }

        foreach($this->itens as $indice => $item) {
            if($item->getTitulo() == $titulo) {
                array_splice($this->itens, $indice, 1);
                echo "<br>O item $titulo foi removido com sucesso!<br>";
            }
        }
    }

    public function listarItens(): array
    {
        return $this->itens;
    }
}