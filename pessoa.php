<?php

class Pessoa 
{
    public string $nome;
    private string $cpf;
    private array $contas;

    public function __construct(string $nome, string $cpf) 
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->contas = []; # representa array vazia (cria uma nova array do ze0ro)
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

    public function listarContas(): array {
        return $this->contas;
    }

    public function getCpf(): string {
        return $this->cpf;
    }
}