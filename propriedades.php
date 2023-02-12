<?php

require_once("src/Classes/Produto.php");

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;
$prod1->desconto = 0.1;

$prod1->defineCodidoBarras(('00001'));

$prod1->acessaCodigoBarras();

var_dump($prod1);