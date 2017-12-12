<?php

namespace Marvel;

class Lavoratore
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}
