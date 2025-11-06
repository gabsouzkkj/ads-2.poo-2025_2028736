<?php

class Veiculo
{
    private string $marca;
    private string $modelo;
    private int $ano;
    private float $velocidadeAtual = 0.0;

    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
    }

    public function getDados() {
        echo "Marca: {$this->getMarca()} | Modelo: {$this->getModelo()} | Ano: {$this->getAno()}";
    }

    # Getters e Setters
    # ========
    # Marca
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca(string $novaMarca): void
    {
        $this->marca = $novaMarca;
    }

    # =========
    # Modelo
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo(string $novoModelo): void
    {
        $this->modelo = $novoModelo;
    }


    # ======
    # Ano
    public function getAno()
    {
        return $this->ano;
    }

    public function setAno(int $novoAno): void
    {
        $this->ano = $novoAno;
    }


    # ===================
    # Velocidade Atual
    public function getVelocidadeAtual() 
    {
        return $this->velocidadeAtual;
    }

    public function setVelocidadeAtual(float $novaVelocidadeAtual): void
    {
        $this->velocidadeAtual = $novaVelocidadeAtual;
    }


    # Ações
    # ===========
    # Acelerar
    public function acelerar(float $quantidade): void {
        if ($quantidade > 0) {
            $this->velocidadeAtual += $quantidade;

            if ($this->velocidadeAtual < 0) {
                $this->velocidadeAtual = 0.0;
            }
            
            echo "\n<br>- Acelerando.. Velocidade atual: " . number_format($this->velocidadeAtual, 1) . "Km/h<br>";
        } else {
             echo "\n<br>- A quantidade para acelerar deve ser positiva!<br>";
        }
    }

    # ========
    # Frear
    public function frear(float $quantidade): void
    {
        if ($quantidade > 0 ) {
            $this->velocidadeAtual -= $quantidade;

            if ($this->velocidadeAtual < 0) {
                $this->velocidadeAtual = 0.0;
            }
            
            echo "\n<br>- Freando.. Velocidade atual: " . number_format($this->velocidadeAtual, 1) . "Km/h<br>\n\n";
        } else {
            echo "\n<br>- A quantidade para acelerar deve ser positiva!<br>\n\n";
        }
    }
}

