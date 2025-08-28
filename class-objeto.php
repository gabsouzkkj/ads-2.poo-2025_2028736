<?php
class pessoa {
    public string $nome;
    public int $cpf;
    public string $dataNascimento;
    public string $genero;
    public string $endereco;
    public string $gmail;
    public int $telefone;
    public contaBancaria $conta;

    public function __construct(string $nome, int $cpf, string $dataNascimento, string $genero, string $endereco, string $gmail, int $telefone, array $contaBancaria) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->genero = $genero;
        $this->endereco = $endereco;
        $this->gmail = $gmail;
        $this->telefone = $telefone;
    }

    public function adicionarConta(ContaBancaria $conta): bool {
        if (empty($conta->getNumeroConta())) {
            return false;
        } else {
            return true;
        }
    }

    public function exibirDados() {
        echo "Nome: " . $this->nome . "\n";
        echo "CPF: " . $this->cpf . "\n";
        echo "Data de nascimento: " . $this->dataNascimento . "\n";
        echo "Gênero: " . $this->genero . "\n";
        echo "Endereço : " . $this->endereco . "\n";
        echo "Email: " . $this->gmail . "\n"; 
        echo "Telefone: " . $this->telefone . "\n";
    }
}

class contaBancaria {
    public int $codAgencia;
    public int $codConta;
    public string $nomeBanco;
    public float $saldo;
    public string $dataAbertura;
    public string $tipoConta;

    public function __construct(int $codAgencia, int $codConta, string $nomeBanco, date $dataAbertura, string $tipoConta) {
        $this->codAgencia = $codAgencia;
        $this->codConta = $codConta;
        $this->nomeBanco = $nomeBanco;
        $this->dataAbertura = $dataAbertura;
        $this->tipoConta = $tipoConta;
    }

    public function exibirDados() {
        echo "Agencia: " . $this->codAgencia = $codAgencia . "\n";
        echo "Conta: " .  $this->codConta = $codConta . "\n";
        echo "Nome do banco: " . $this->nomeBanco = $nomeBanco . "\n";
        echo "Data de abertura: " . $this->dataAbertura = $dataAbertura . "\n";
        echo "Tipo da conta: " . $this->tipoConta = $tipoConta . "\n";
    }
}

$contaBancaria = [
    'codAgencia' => '001',
    'codBanco' => '12345-6',
    'nomeBanco' => 'Bradesco',
    'saldo' => 0.0, 
    'dataAbertura' => '2025-08-27', 
    'tipoConta' => 'Corrente'
];

$GabrielPhilippe = new pessoa (
    "Gabriel Philippe Souza da Silva",
    12345678901,
    "2007-08-06",
    "Masculino",
    "Rua Teste, 123",
    "gab.philippe@email.com",
    14987654321,
    $contaBancaria
);

$GabrielPhilippe->exibirDados();