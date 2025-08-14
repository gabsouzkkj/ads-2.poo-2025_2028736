<?php
$numero = readline('Insira um número para a tabuada (1 a 10) > ');

$i = 1;
while ($i <= 10) {
    echo "$numero x $i = " . ($numero * $i++) . "\n";
}

?>