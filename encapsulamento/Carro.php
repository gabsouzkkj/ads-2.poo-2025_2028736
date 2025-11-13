<?php

Class Carro 
{
    private string $marca;
    private string $modelo;
    private int $ano;

    public function __construct(string $marca, string $modelo, int $ano) 
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);     
    }

    # Getters
    public function getMarca(): string 
    {
        return $this->marca;
    }

    public function getModelo(): string 
    {
        return $this->modelo;
    }

    public function getAno(): int 
    {
        return $this->ano;
    }

    public function getDados(): string
    {
        return "Marca: " . $this->getMarca() . " | Modelo: " . $this->getModelo() . " | Ano: " . $this->getAno() . "<br>";
    }

    # Setters
    public function setMarca(string $marca): void
    {
        $marca = trim($marca);
        if (empty($marca)) {
            throw new InvalidArgumentException("A marca não pode ser uma string vazia!");
        }
        $this->marca = $marca;
    }

    public function setModelo(string $modelo): void 
    {
        $modelo = trim($modelo);
        if (empty($modelo)) {
            throw new InvalidArgumentException("Modelo não pode ser vazio!<br>");
        }
        $this->modelo = $modelo;
    }

    public function setAno(int $ano): void 
    {
        if ($ano < 1886 || $ano > 2025) {
           throw new InvalidArgumentException("Ano inválido para um carro!<br>");
        } 
        $this->ano = $ano;
    }
}