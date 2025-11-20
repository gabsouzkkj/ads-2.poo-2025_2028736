<?php

require_once 'Item.php';

class Magia extends Item
{
    public function __construct(string $nome, int $tamanho = 2, string $classe)
    {
        parent::__construct();
    }
}