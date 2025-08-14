<?php
$nota = readline('Insira sua nota (0 a 10) > ');

if ($nota >= 7 ) {
    echo "Aprovado!";
} elseif  ($nota >= 5 and $nota < 7) {
    echo "Recuperação!";
} else {
    echo "Reprovado!";
}

?>