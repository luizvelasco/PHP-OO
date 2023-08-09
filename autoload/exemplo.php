<?php

require_once "autoload.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = "(48) 65564564";

$fornecedor = new Fornecedor;
$fornecedor->cnpj = "123456789";
$fornecedor->nomeFantasia = "Meu armazem";
$fornecedor->razaoSocial = "Meu armazem LTDA";

var_dump($prod1, $cli, $fornecedor);