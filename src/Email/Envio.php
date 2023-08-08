<?php

namespace App\Email;

use Cliente;
use stdClass;

CONST VERSAO = 1.0;

class Envio
{
    public function enviar(): void
    {
        $adaptador = new Adaptadores\Mailgun\Adaptador;
        $transporte = new Transporte;

        $obj = new  \stdClass;
        $cli = new Cliente;

        var_dump($adaptador, $transporte, $obj, $cli);
    }    
}

function validar(string $email): void
{
    echo "O endereço $email é valido";
}