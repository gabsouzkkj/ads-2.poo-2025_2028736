<?php

class Cliente
{
    public string $nome;
    public string $email;
    public string $cpf;

    public function __construct(string $nome, string $email, string $cpf)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
    }

    # GETTERS
    public function getNome(): string 
    {
        return $this->nome;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getCpf(): string 
    {
        return $this->cpf;

        return true;
    }

    # CPF
    public function validarCpf($cpf): bool 
    {
        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/\D/', $cpf)) {
            return false;
        }
        
        return true;        
    }

    public function setCpf(): string {
        if (!$this->validaCpf($cpf)) {
            return false; 
        } 

        $this->cpf = $cpf;
        return true;
    }

    # Email
    public function validarEmail($email): bool  {
        if ($email !== mb_strtolower($email)) {
        return false; 
    }
        
        return true;
    }

    public function alterarEmail(string $novoEmail): bool 
    {

    }

    # Ação
    public function hello()
    {
        echo "$this->nome | $this->email | $this->cpf<br>";
    }
}

$cliente = new Cliente('Gabriel Philippe Souza da Silva', 'philippegabriel@gmail.com', '00000000001');
$cliente->hello();

if ($cliente->validarCpf($cliente->getCpf())) {
    echo "CPF Válido!<br>";
} else {
    echo "CPF Inválido! Você precisa digitar corretamente seu CPF: ($cliente->cpf)<br>";
}

if ($cliente->validarEmail($cliente->getEmail()) == true) {
    echo "Email válido!<br>";
} else {
    echo "Email Inválido! Você precisa digitar obrigatoriamente com letra minúscula: ($cliente->email)<br>";
}