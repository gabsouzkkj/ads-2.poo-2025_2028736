<?php

require_once 'Item.php';

class Defesa extends Item
{
    public function __construct(string $nome, int $tamanho = 4, string $classe)
    {
        parent::__construct();
    }
}