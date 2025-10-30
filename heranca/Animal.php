<?php

class Animal 
{
    private string $nome;

    public function __construct(string $nome) 
    {
        $this->setNome($nome);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void 
    {
        if (!empty($nome)) {
        $this->nome = $nome;
        } else {
            $this->nome = "Null";
        }
    }

    public function fazBarulho(): string {
        return "<br>Fazendo barulho<br>\n";
    }

    public function descrever(): string {
        return "<br>Eu me chamo $this->nome!<br>\n";
    }
}
