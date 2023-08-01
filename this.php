<?php

require_once "src/Classes/Cliente.php";

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = "(48) 65564564";

$cli->comprar();

$cli2 = new Cliente;
$cli2->definirNome("Maria");
$cli2->idade = 40;
$cli2->endereco = "São Paulo";
$cli2->telefone = "(48) 65564564";

$cli2->comprar();