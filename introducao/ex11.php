<?php
$alunos = array(
    0 => array("Nome" => "Gabriel Philippe", "Primeira nota" => 9, "Segunda nota" => 8, "Terceira nota" => 7),
    1 => array("Nome" => "Caroline Moreno", "Primeira nota" => 9, "Segunda nota" => 8, "Terceira nota" => 7),
    2 => array("Nome" => "Samuel Gonçalves", "Primeira nota" => 9, "Segunda nota" => 8, "Terceira nota" => 7)
);

foreach ($alunos as $id => $dados) {
    echo "Aluno ID: " . $id . "<br>";
    echo "Nome: " . $dados['Nome'] . "<br>";
    
    echo "Primeira nota: " . $dados['Primeira nota'] . "<br>";
    echo "Segunda nota: " . $dados['Segunda nota'] . "<br>";
    echo "Terceira nota: " . $dados['Terceira nota'] . "<br>";
    
    $soma = $dados['Primeira nota'] + $dados['Segunda nota'] + $dados['Terceira nota'];
    $media = $soma / 3;
    
    echo "Média do aluno: " . $media . "<br><br>";
}
?>