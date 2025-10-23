<?php
$idade = readline('Insira sua idade > ');

function verificarIdade($idade) {
    if ($idade >= 18 ) {
        return "Você é maior de idade!";
    } else {
        return "Você não é maior de idade!";
    }
}

print verificarIdade($idade)

?>