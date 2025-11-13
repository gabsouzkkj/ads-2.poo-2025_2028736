<?php

require_once '../carro.php';

try {
    $carro = new Carro("Toyota", "Corolla", 2020);
    echo "Carro criado com sucesso!<br>";
    echo $carro->getDados() . "<br>";
    
    echo "Aletrando marca<br>";
    $carro->setMarca("Teste");
    echo "A marca foi alterada com sucesso! Nova marca: " . $carro->getMarca() . "<br>";

    echo "<br>" . $carro->getDados();
    echo "<br>Aletrando modelo<br>";
    $carro->setModelo("Civic");
    echo "O modelo foi alterado com sucesso! Novo modelo: " . $carro->getModelo() . "<br>";

    echo "<br>" . $carro->getDados();
    echo "<br>Alterando ano para 2035<br>";
    $carro->setAno(2035);
} catch (InvalidArgumentException $e) {
    echo "Erro: " . $e->getMessage();
}

try {
    $carro2 = new Carro("", "Camaro", 1967);
    
    echo "<br>Carro criado com sucesso!<br>";
    echo $carro2->getDados() . "<br>";
} catch (InvalidArgumentException $e) {
    echo "Erro : " . $e->getMessage(); 
}