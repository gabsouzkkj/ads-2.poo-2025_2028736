<?php

require_once 'Acervo.php';
require_once 'Livro.php';
require_once 'Revista.php';
require_once 'MidiaDigital.php';
require_once 'Prateleira.php';
require_once 'Estante.php';
require_once 'Biblioteca.php';

# Acervos
$livro = new Livro('Engenharia do Lucro', 1952);
$livro->setAutor('Kélen Abreu');
$livro->setISBN('978-65-55446-28-9');
$livro->exibirDetalhe();

$revista = new Revista('Veja', 1968);
$revista->setEdicao(1);
$revista->setEditora('Editora Abril');
$revista->exibirDetalhe();

$midiadigital = new MidiaDigital('Engenharia do lucro: 4 pilares para transformar a sua empresa em uma máquina de resultados', 2025);
$midiadigital->setFormato('EPUB (eBook)');
$midiadigital->exibirDetalhe();

$itens = [$livro, $revista, $midiadigital];

echo "<pre>";
foreach ($itens as $indice => $item) {
    echo "<br>Item: [" . ($indice + 1) . "]<br>";
    var_dump($item);
}
echo "</pre>";

# Prateleiras
$prateleira = new Prateleira();
$prateleira2 = new Prateleira();
$prateleira->adicionarItem($livro);
$prateleira->adicionarItem($revista);
$prateleira2->adicionarItem($midiadigital);

$prateleiraItens = [$prateleira, $prateleira2];

echo "<pre>";
foreach ($prateleiraItens as $indice => $itens) {
    echo "Prateleira: [" . ($indice + 1) . "] <br>";
    var_dump($itens->listarItens());
}
echo "</php>";

# Removendo item Veja
// $prateleira->removerItem('Veja');

// echo "<pre>";
// foreach ($prateleiraItens as $indice => $itens) {
//     echo "Prateleira: [" . ($indice + 1) . "] <br>";
//     var_dump($itens->listarItens());
// }
// echo "</php>";

# Estantes
$estante = new Estante();
$estante2 = new Estante();
$estante->adicionarPrateleira($prateleira);
$estante2->adicionarPrateleira($prateleira2);

$estantePrateleiras = [$estante, $estante2];

echo "<pre>";
foreach ($estantePrateleiras as $indice => $prateleiras) {
    echo "Estantes: [" . ($indice + 1) . "] <br>";
    var_dump($prateleiras->listarPrateleiras());
}
echo "</pre>";

# Removendo prateleira indice 0
// $estante->removerPrateleira(0);

// echo "<pre>";
// foreach ($estantePrateleiras as $indice => $prateleiras) {
//     echo "Estantes: [" . ($indice + 1) . "] <br>";
//     var_dump($prateleiras->listarPrateleiras());
// }
// echo "</pre>";

# Biblioteca

$biblioteca = new Biblioteca();
$biblioteca->adicionarEstante($estante);
$biblioteca->adicionarEstante($estante2);

echo "<pre>";
echo "Biblioteca [0]:<br>";
foreach ($biblioteca->listarEstantes() as $indice => $estante) {
    echo "Estantes: [" . ($indice + 1) . "]<br>";
    var_dump($estante->listarPrateleiras());
}
echo "</pre>";

# Removendo biblioteca indice 0
// $biblioteca->removerEstante(0);

// echo "<pre>";
// echo "Biblioteca [0]:<br>";
// foreach ($biblioteca->listarEstantes() as $indice => $estante) {
//     echo "Estantes: [" . ($indice + 1) . "]<br>";
//     var_dump($estante->listarPrateleiras());
// }
echo "</pre>";

echo "<pre>";
echo "<br><br><h3>INVENTÁRIO</h3>";
echo $biblioteca->inventario();
echo "</pre>";