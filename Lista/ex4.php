<?php

class Livro 
{
    public string $titulo;
    public string $autor;
    public int $paginas;

    public function __construct(string $titulo, string $autor, int $paginas) 
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }    

    public function exibirResumo(): string 
    {
        return "Título: {$this->titulo}<br>Autor: {$this->autor}";
    }

    public function quantidadePaginas(): string 
    {
        return "<br>Páginas: $this->paginas";
    }

}

$livro = new Livro ('O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 96);

echo "INFORMAÇÕES DO LIVRO<BR><BR>";
echo $livro->exibirResumo();
echo $livro->quantidadePaginas();