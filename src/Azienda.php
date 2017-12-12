<?php

namespace Marvel;

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
