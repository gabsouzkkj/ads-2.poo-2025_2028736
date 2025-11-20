<?php

class Estante {
    protected array $pratelileiras = [];

    public function getPrateleiras(): array
    {
        return $this->prateleiras;
    }

    public function adicionarPrateleira(Prateleira $prateleira): void
    {
        if(empty($prateleira)) {
            echo "O(s) item(ns) não foram definido(s)!";
        }

        $this->prateleiras[] = $prateleira;
    }

    public function removerPrateleira(int $indice) {       
        array_splice($this->prateleiras, $indice, 1);
        echo "A prateleira $indice foi removida com sucesso!";
    }

    public function listarPrateleiras(): array
    {
        return $this->prateleiras;
    }
}