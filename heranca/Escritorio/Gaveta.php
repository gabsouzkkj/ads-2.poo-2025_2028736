<?php

require_once "Item.php";

class Gaveta
{
    private array $itens = [];

    public function getItens(): array {
        return $this->itens;
    }

    public function setItens(array $itens) {
        if (empty($itens)) {
            return "- Nenhum item adicionado!<br>";
        }

        $this->itens = $itens;
    }    

    public function adicionarItem(Item $item) {
        if(empty($item)) {
            return "- Nenhum item adicionado!<br>";
        }

        $this->itens[] = $item;
        return "- O item {$item->getNome()} adicionado com sucesso!<br>";
    }

    public function removerItem(string $nome): void
    {
        if (empty($this->itens)) {
            echo "- Não há itens para remover!<br>";
            return;
        }
        
        foreach($this->itens as $indiceValor => $valor) {
            if($valor->getNome() == $nome) {
                array_splice($this->itens, $indiceValor, 1);
                echo "- O item $nome foi removido com sucesso!<br>";
            }
        }
    }
    
    public function listarItens(): array
    {
        if (empty($this->itens)) {
            echo "- A lista de itens está vazia!<br>";
        }

        return $this->itens;
    }
}