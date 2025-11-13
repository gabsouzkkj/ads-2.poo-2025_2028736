<?php

require_once 'Item.php';

class Pasta extends Item
{
    protected string $categoria;

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria) {
        if(empty($categoria)) {
            return "- A categoria da pasta não foi definida!<br>";
        }

        $this->categoria = $categoria;
    }    
}