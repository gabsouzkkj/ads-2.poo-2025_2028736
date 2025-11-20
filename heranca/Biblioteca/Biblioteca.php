<?php

class Biblioteca
{
    protected array $estantes = [];

    public function getEstantes(): array
    {
        return $this->estantes;
    }

    public function adicionarEstante(Estante $estante)
    {
        if(empty($estante)) {
            echo "A estante não foi definida!";
        }

        $this->estantes[] = $estante;
    }

    public function removerEstante(int $indice)
    {
        array_splice($this->estantes, $indice, 1);
        echo "A estante $indice foi removida com sucesso!";
    }

    public function listarEstantes(): array
    {
        return $this->estantes;
    }

    public function inventario()
    {
        foreach ($this->estantes as $indice => $estante) {
            echo "Estante: [" . ($indice + 1) . "]<br>";

            foreach ($estante->getPrateleiras() as $indice => $prateleira) {
                echo " Prateleira: [" . ($indice + 1) . "]<br>";

                foreach($prateleira->getItens() as $indice => $item) {
                    echo "  Item: [" . ($indice + 1) . "]<br>   - Nome: " . ($item->getTitulo()) . "<br>";
                }
            }
        } 
    }
}