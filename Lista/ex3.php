<?php

class Aluno 
{
    public string $nome;
    public int $matricula;
    public array $notas;

    public function __construct(string $nome, string $matricula, array $notas) 
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->notas = $notas;
    }    

    public function exibirDados(): string 
    {
        return "Nome do aluno: {$this->nome}<br>RA: {$this->matricula} <br>";
    }
    
    public function calcularMedia(): float 
    {
        return array_sum($this->notas) / count($this->notas);
    }
}

$aluno = new Aluno ('Gabriel Philippe', 2028736, [5, 4, 8]);

echo "INFORMAÇÕES DO ALUNO<br><br>";
echo $aluno->exibirDados();
echo "<BR>NOTAS<BR>";
echo "<br>Nota 1: {$aluno->notas[0]}<br>Nota 2: {$aluno->notas[1]}<br>Nota 3: {$aluno->notas[2]} <br> Média: " . number_format($aluno->calcularMedia(), 2, '.', '');