<?php

require_once 'Veiculo.php';

class Moto extends Veiculo
{
    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);      
    }


    # Ações
    # ==========
    # Empinar
    public function empinar(): void
    {
        if ($this->getVelocidadeAtual() >= 20.0) {
            echo "\n<br>- A moto {$this->getModelo()} está empinando a {$this->getVelocidadeAtual()} km/h!<br>\n";
        } else {
            echo "\n<br>- Para empinar, a moto precisa estar acima de 20 km/h. Velocidade atual: {$this->getVelocidadeAtual()} km/h.<br><br>\n\n";
        }
    }
}