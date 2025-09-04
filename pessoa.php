<?php

class Pessoa 
{
    public string $nome;
    public string $cpf;
    public array $contas;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->contas = []; # representa array vazia (cria uma nova array do zero)
    }

    public function adicionarConta(ContaBancaria $numeroConta): bool 
    {
        if (empty($numeroConta)) {
            return false;
        } else {
            $this->contas[] = $numeroConta;
            return true;
        }
    }

    public function listarConta(): array {
        return $this->contas;
    }
}

// $usuario1 = new Pessoa (
//     "Gabriel Philippe",
//     "000.000.000-00"
// );

// echo $usuario1->hello();

// $usuario1->adicionarConta("12345-6");
// $contas = $usuario1->listarConta();

// if (!empty($contas)) {
//     echo "Contas do clientes {$usuario1->nome}";
//     for ($i = 0; $i < count($contas); $i++) {
//         echo $contas[$i] . "<br>";
//     }
// } else {
//     echo "Usuário não possui contas cadastradas";
// }