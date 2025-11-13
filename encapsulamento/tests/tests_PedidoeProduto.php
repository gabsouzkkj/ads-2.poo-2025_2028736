<?php

require_once '../Produto.php';
require_once '../Pedido.php';

try {
    # Produto
    $produto3 = new Produto("Teclado", 120.00, 10); 
    echo $produto3->getDados();

    # Pedido 1
    $pedido = new Pedido("P-001");
    # Adicionando itens
    $pedido->adicionarItem($produto3, 2);
    // $pedido->adicionarItem($produto3, 20);

    echo $pedido->exibirResumo();

    # Removendo item
    $pedido->removerItem("Teclado");
    echo $pedido->exibirResumo();
    echo $produto3->getDados();

    $produto3->setPreco(150.00);
    echo "<br>Após atualizar o preço do produto:<br>";
    echo $produto3->getDados();

    echo "Novo item adicionado:<br>";
    $pedido->adicionarItem($produto3, 1);
    echo $pedido->exibirResumo();

    echo $produto3->getDados();
} catch (RuntimeException $e) {
    echo "<br>Erro em tempo de execução: " . $e->getMessage() . "<br>";
} catch (InvalidArgumentException $e) {
    echo "<br>Erro de argumento: " . $e->getMessage() . "<br>";
}

?>