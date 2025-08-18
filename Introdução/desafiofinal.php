<?php

function listadeCompras() {
    $listaCompras = [];
    print "\n👋: Bem-vindo à Lista de Compras!\n";

    while (true) {
        $novoitem = readline("❇️ : Digite um item (ou 'sair' para encerrar): ");
        
        if (strtolower($novoitem) === 'sair') {
            break; 
        }

        if (trim($novoitem) !== "") {
            $listaCompras[] = $novoitem;
            print "✅: O Item $novoitem foi adicionado com sucesso!\n\n";
        } else {
            print "⚠️ : Por favor, adicione um item! Não deixe em branco.\n\n";
        }
    }

    if (empty($listaCompras)) {
        print "\n❌: Nenhum item adicionado!\n";
    } else {
        print "\n🛒: Lista de compras atualizada:\n";
        foreach ($listaCompras as $chave => $valor) {
            print " * ID $chave - Item: $valor\n";
        }
        print "\nObrigado por utilizar a Lista de Compras!\n";
    }
}

listadeCompras();