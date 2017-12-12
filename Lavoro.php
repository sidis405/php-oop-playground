<?php

class Lavoratore
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Azienda
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function assumi(Lavoratore $lavoratore)
    {
        $this->staff->aggiungi($lavoratore);
    }

    public function mostraListaLavoratori()
    {
        return $this->staff->mostraMembri();
    }
}

class Staff
{
    public $membri = [];

    public function __construct($membri = [])
    {
        $this->membri = $membri;
    }

    public function aggiungi(Lavoratore $lavoratore)
    {
        $this->membri[] = $lavoratore;
    }

    public function mostraMembri()
    {
        return $this->membri;
    }
}

$sid = new Lavoratore('Sid');

$staff = new Staff([$sid]);

$acme = new Azienda($staff);

$acme->assumi(new Lavoratore("Elisa"));

var_dump($acme->mostraListaLavoratori());
