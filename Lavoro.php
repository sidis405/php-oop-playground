<?php

use Marvel\Staff;
use Marvel\Azienda;
use Marvel\Lavoratore;

$sid = new Lavoratore('Sid');

$staff = new Staff([$sid]);

$marvel = new Azienda($staff);

$marvel->assumi(new Lavoratore("Elisa"));

var_dump($marvel->mostraListaLavoratori());
