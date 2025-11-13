<?php

require_once "Item.php";
require_once "Documento.php";
require_once "Objeto.php";
require_once "Pasta.php";

require_once "Armario.php";
require_once "Escritorio.php";
require_once "Gaveta.php";

# (<pre>, </pre>): realiza uma preservação de formatação ao exibir o conteúdo;
# array_splice(): extrai uma parte de um array e o retorna como um novo array (valores detalhados);
# var_dump(): exibe informações estruturadas sobre uma variável (tipo e valor);
# foreach(): itera sobre arrays ou objetos, executando um bloco de código para cada elemento.
    # foreach ($array as $chave => $valor) - Você basicamente vai percorrer dentro de uma array/objeto,
    # pegando a chave/índice e o valor correspondente a essa chave/índice.

# Itens (Objetos, Documentos e Pastas)
$item1 = new Objeto("AMD Ryzen 5 5500", "Um processador de 6 núcleos e 12 threads");
$item1->setPeso(0.450);
$item2 = new Documento("Fundamentos da Qualidade de Dados", "Guia Prático Para Criar Pipelines de Dados Confiáveis");
$item2->setDataCriacao("2024-09-30");
$item3 = new Pasta("POO", "Arquivos de POO em PHP");
$item3->setCategoria("Repósitorio de Código");
$item4 = new Documento("Relatório Anual 2024", "Balanço financeiro e operacional da empresa.");
$item4->setDataCriacao("2025-01-15");
$item5 = new Pasta("Projetos Atuais", "Arquivos de design e planejamento do novo sistema.");
$item5->setCategoria("Documentação de Software");
$item6 = new Objeto("Monitor Dell UltraSharp U2722D", "Monitor de 27 polegadas com resolução QHD.");
$item6->setPeso(5.8);
$item7 = new Pasta("Marketing Digital", "Estratégias de SEO, SEM e mídias sociais.");
$item7->setCategoria("Comunicação");
$item8 = new Documento("Contrato de Prestação de Serviços", "Termos e condições para o cliente X.");
$item8->setDataCriacao("2023-11-01");

$itens = [$item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8];

echo "<pre>";
foreach ($itens as $indice => $item) {
    echo "<br>Item " . ($indice + 1) . ":<br>";
    var_dump($item); 
}
echo "</pre>";

# Gavetas 
$gaveta1 = new Gaveta();
$gaveta2 = new Gaveta();
$gaveta3 = new Gaveta();

echo $gaveta1->adicionarItem($item1);
echo $gaveta1->adicionarItem($item2);
echo $gaveta1->adicionarItem($item3);
echo $gaveta2->adicionarItem($item4);
echo $gaveta2->adicionarItem($item5);
echo $gaveta3->adicionarItem($item6);
echo $gaveta3->adicionarItem($item7);
echo $gaveta3->adicionarItem($item8);

$gavetas = [$gaveta1, $gaveta2, $gaveta3];

echo "<pre>";
foreach ($gavetas as $indice => $gaveta) {
    echo "<br>Gaveta " . ($indice + 1) . ":<br>";
    var_dump($gaveta->listarItens()); 
}
echo "</pre>";

$gaveta1->removerItem("AMD Ryzen 5 5500");

echo "<pre>";
foreach ($gavetas as $indice => $gaveta) {
    echo "<br>Gaveta " . ($indice + 1) . ":<br>";
    var_dump($gaveta->listarItens()); 
}
echo "</pre>";

# Armários 
$armario1 = new Armario();
$armario2 = new Armario();
$armario3 = new Armario();

echo $armario1->adicionarGaveta($gaveta1);
echo $armario1->adicionarGaveta($gaveta2);
echo $armario3->adicionarGaveta($gaveta3);

$armarios = [$armario1, $armario2, $armario3];

echo "<pre>";
foreach ($armarios as $indice => $armario) {
    echo "<br>Armário " . ($indice + 1) . ":<br>";
    var_dump($armario->listarGavetas()); 
}
echo "</pre>";

echo $armario1->removerGaveta(1);

echo "<pre>";
foreach ($armarios as $indice => $armario) {
    echo "<br>Armário " . ($indice + 1) . ":<br>";
    var_dump($armario->listarGavetas()); 
}
echo "</pre>";

# Escritório
$escritorio1 = new Escritorio();
echo $escritorio1->adicionarArmario($armario1);
echo $escritorio1->adicionarArmario($armario2);
echo $escritorio1->adicionarArmario($armario3);

echo "<pre>";
foreach ($escritorio1->listarArmarios() as $indice => $armario) {
    echo "<br>Armário " . ($indice + 1) . ":<br>";
    var_dump($armario->listarGavetas()); 
}
echo (var_dump($escritorio1->listarArmarios()) . "<br><br>");
echo "</pre>";

$escritorio1->removerArmario(1);

echo "<pre>";
foreach ($escritorio1->listarArmarios() as $indice => $armario) {
    echo "<br>Armário " . ($indice + 1) . ":<br>";
    var_dump($armario->listarGavetas()); 
}
echo $escritorio1->auditoria();
echo "</pre>";