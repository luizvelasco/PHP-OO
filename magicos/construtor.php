<?php

use App\Classes\Cliente;

require_once "../autoload/autoload-psr4.php";

$cli = new Cliente("Velasco", "1199887755", 40);

$cli->cpf = "777.777.888.45";
$cli->rg = "11.11.111.11";

echo $cli->cidade;

$cli->alterar("Luiz Velasco", 29);

$cli(false);

$cliSerializado = serialize($cli);

echo "<br>" . $cliSerializado;

$cli2 = unserialize($cliSerializado);

echo "<br>" . $cli;

var_dump($cli, $cli2);