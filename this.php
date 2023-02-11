<?php

require_once("src/Classes/Cliente.php");

$cli = new Cliente;
$cli->nome = "Jõao";
$cli->idade = "40";
$cli->endereco = "São Paulo";
$cli->telefone = "(11)2154-5415";

$cli->comprar();

$cli2 = new Cliente;
$cli2->definirNome("Maria");
$cli2->idade = "40";
$cli2->endereco = "São Paulo";
$cli2->telefone = "(11)2154-5415";

echo "<br>";
$cli2->comprar();