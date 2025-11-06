<?php

class Carro extends Veiculo
{
    private int $portas;

    public function __construct(string $marca, string $modelo, int $ano, int $portas)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
        $this->portas = $portas;
    }


    # =========
    # Portas
    public function getPortas()
    {
        return $this->portas;
    }


    # ===============
    # Abrir portas
    public function abrirPortas(int $numeroDaPorta): void {
        if ($numeroDaPorta > 0 && $numeroDaPorta <= $this->portas) {
            
            if ($this->getVelocidadeAtual() = 0.0) {
                echo "A porta {$numeroDaPorta} foi aberta!<br><br>\n\n";
            } else {
                 echo "Não é possível abrir a porta em movimento. Velocidade: {$this->getVelocidadeAtual()} km/h.<br><br>\n\n";
            }
        } else {
             echo "Erro: A porta número {$numeroDaPorta} não existe neste carro de {$this->portas} portas.<br>\n";
        }
    }
}