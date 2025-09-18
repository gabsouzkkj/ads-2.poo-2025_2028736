<?php

class Carro 
{
    public string $marca;
    public string $carro;
    public int $ano;

    public function __construct(string $marca, string $carro, int $ano) 
    {
        $this->marca = $marca;
        $this->carro = $carro;
        $this->ano = $ano;
    }

    public function exibirInformacoes(): string 
    {
        return "Meu carro é um {$this->carro} da marca {$this->marca} e do ano {$this->ano}";
    }
}

$informacaoCarro = new Carro('Toyota', 'Corolla', 2023);

echo "INFORMAÇÃO DO CARRO <br><br>";
echo $informacaoCarro->exibirInformacoes();