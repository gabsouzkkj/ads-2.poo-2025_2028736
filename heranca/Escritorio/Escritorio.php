<?php

require_once "Armario.php";

class Escritorio
{
    private array $armarios = [];

    public function getArmarios(): array
    {
        return $this->armarios;
    }

    public function setArmarios(array $armarios) {
        if (empty($armarios)) {
            return "- Nenhum armário adicionado!<br>";
        }

        $this->armarios = $armarios;
    }

    public function adicionarArmario(Armario $armario) {
        if(empty($armario)) {
            return "- Nenhum armário adicionado!<br>";
        }

        $this->armarios[] = $armario;
    }

    public function removerArmario(int $indice): void
    {
        if (empty($this->armarios)) {
            echo "- Não há armários para remover!<br>";
            return;
        }

        array_splice($this->armarios, $indice, 1);
        echo "- O armário da índice $indice foi removido com sucesso!<br>";
    }

    public function listarArmarios(): array
    {
        if (empty($this->armarios)) {
            echo "- A lista de armários está vazia!<br>";
        }

        return $this->armarios;
    }

    public function auditoria()
    {
        foreach($this->getArmarios() as $indiceArmario => $armario) {
            echo "<br>[" . ($indiceArmario + 1) . "] Armário<br>";

            foreach($armario->getGavetas() as $indiceGaveta => $gaveta) {
                echo "[" . ($indiceGaveta + 1) . "] Gaveta<br>";
                if (empty($gaveta->getItens())) {
                    echo "   - A lista de itens está vazia!<br>";
                }

                foreach($gaveta->getItens() as $indiceItem => $item) {
                    echo "   - [" . ($indiceItem + 1) . "] Item - Nome: " . $item->getNome() . ".<br>";
                }
            }
        }
    }
}