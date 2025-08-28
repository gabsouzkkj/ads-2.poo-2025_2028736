<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema bancário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 2rem auto;
            padding: 20px;
        }
        .container {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        h1, h2 {
            color: #333;
        }
        .dados-pessoa, .dados-conta {
            margin-bottom: 15px;
        }
        .dados-item {
            margin: 5px 0;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    class Pessoa {
        public string $nome;
        public string $cpf;
        public string $dataNascimento;
        public string $genero;
        public string $endereco;
        public string $gmail;
        public string $telefone;
        public $conta;

        public function __construct(string $nome, string $cpf, string $dataNascimento, string $genero, string $endereco, string $gmail, string $telefone, $contaBancaria) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->dataNascimento = $dataNascimento;
            $this->genero = $genero;
            $this->endereco = $endereco;
            $this->gmail = $gmail;
            $this->telefone = $telefone;
            $this->conta = $contaBancaria;
        }

        public function adicionarConta($conta): bool {
            if (empty($conta['codConta'])) {
                return false;
            } else {
                return true;
            }
        }

        public function boasVindas($conta) {
            if ($conta === true) {
                return "Seja bem vindo, $this->nome! (CPF: $this->cpf)";
            } else {
                return false;
            }
        }
    }

    $contaBancaria = [
        'codAgencia' => '001',
        'codConta' => '12345-6',
        'nomeBanco' => 'Bradesco',
        'saldo' => 0.0, 
        'dataAbertura' => '2025-08-27', 
        'tipoConta' => 'Corrente'
    ];

    $GabrielPhilippe = new Pessoa(
        "Gabriel Philippe Souza da Silva",
        "123.456.789-01", 
        "2007-08-06",
        "Masculino",
        "Rua Teste, 123",
        "gab.philippe@email.com",
        "(14) 98765-4321", 
        $contaBancaria
    );

    $contaAdicionada = $GabrielPhilippe->adicionarConta($contaBancaria);
    $mensagemBoasVindas = $GabrielPhilippe->boasVindas($contaAdicionada);
    ?>

    <div class="mensagem">
        <?php 
        if ($mensagemBoasVindas) {
            echo "<h1>" . $mensagemBoasVindas . "</h1>";
        } else {
            echo "<p>Não foi possível completar o cadastro. Verifique os dados da conta.</p>";
        }
        ?>
    </div>
    <div class="container">
        <h2>Dados Pessoais</h2>
        <div class="dados-pessoa">
            <div class="dados-item"><span class="label">Nome:</span> <?php echo $GabrielPhilippe->nome; ?></div>
            <div class="dados-item"><span class="label">CPF:</span> <?php echo $GabrielPhilippe->cpf; ?></div>
            <div class="dados-item"><span class="label">Data de Nascimento:</span> <?php echo $GabrielPhilippe->dataNascimento; ?></div>
            <div class="dados-item"><span class="label">Gênero:</span> <?php echo $GabrielPhilippe->genero; ?></div>
            <div class="dados-item"><span class="label">Endereço:</span> <?php echo $GabrielPhilippe->endereco; ?></div>
            <div class="dados-item"><span class="label">E-mail:</span> <?php echo $GabrielPhilippe->gmail; ?></div>
            <div class="dados-item"><span class="label">Telefone:</span> <?php echo $GabrielPhilippe->telefone; ?></div>
        </div>

        <h2>Dados Bancários</h2>
        <div class="dados-conta">
            <div class="dados-item"><span class="label">Agência:</span> <?php echo $contaBancaria['codAgencia']; ?></div>
            <div class="dados-item"><span class="label">Conta:</span> <?php echo $contaBancaria['codConta']; ?></div>
            <div class="dados-item"><span class="label">Banco:</span> <?php echo $contaBancaria['nomeBanco']; ?></div>
            <div class="dados-item"><span class="label">Saldo:</span> R$ <?php echo number_format($contaBancaria['saldo'], 2, ',', '.'); ?></div>
            <div class="dados-item"><span class="label">Data de Abertura:</span> <?php echo $contaBancaria['dataAbertura']; ?></div>
            <div class="dados-item"><span class="label">Tipo de Conta:</span> <?php echo $contaBancaria['tipoConta']; ?></div>
        </div>

        
    </div>
</body>
</html>