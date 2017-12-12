<?php

namespace Marvel;

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
