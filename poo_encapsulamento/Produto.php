<?php

class Produto 
{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct(string $nome, float $preco, int $estoque = 0) 
    {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setEstoque($estoque);
    }

    # Getters
    public function getNome(): string 
    {
        return $this->nome;
    }

    public function getPreco(): float 
    {
        return $this->preco;
    }

    public function getEstoque(): int 
    {
        return $this->estoque;
    }

    public function getDados(): string 
    {
        return "Produto: " . $this->getNome() . " | Preço: " . number_format($this->getPreco(), 2, ',', '.') . " | Quantidade: " . $this->getEstoque() . "<br>";
    }

    # Setters e Métodos
    public function setNome(string $nome): void 
    {
        $nome = trim($nome);
        if (empty($nome)) {
            throw new InvalidArgumentException("Nome não pode ser uma string vazia!");
        }

        $this->nome = $nome;
    }

    public function setPreco(float $preco): void 
    {
        if ($preco < 0) {
            throw new InvalidArgumentException("Preço não pode ser negativo!");
        }

        $this->preco = $preco;
    }

    public function setEstoque(int $estoque): void 
    {
        if ($estoque < 0) {
            throw new InvalidArgumentException("Estoque não pode ser negativo!");
        }

        $this->estoque = $estoque;
    }

    public function atualizarPreco(float $preco): void 
    {
        // Reutiliza o setter para garantir a validação.
        $this->setPreco($preco);
    }

    public function repor(int $qtd): void 
    {
        if ($qtd < 0) {
            throw new InvalidArgumentException("Quantidade inválida para reposição.");
        }

        $this->estoque += $qtd;
    }

    public function vender(int $qtd): void 
    {
        if ($qtd <= 0) {
            throw new InvalidArgumentException("A quantidade a ser vendida deve ser maior que zero.");
        }

        if ($qtd > $this->estoque) {
            throw new RuntimeException("Estoque insuficiente para a venda de {$this->nome}. Disponível: {$this->estoque}. Solicitado: {$qtd}.");
        }

        $this->estoque -= $qtd;
    }
}