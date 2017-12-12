<?php

class LightSwitch
{
    public function on()
    {
    }

    public function off()
    {
    }

    private function connect()
    {
    }

    private function disable()
    {
    }
}

$lightSwitch = new LightSwitch;
// Errore
$lightSwitch->connect();
