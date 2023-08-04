<?php

require_once "src/Classes/Fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->cnpj = "12345678913";
$fornecedor->nomeFantasia = "Meu Armezem";
$fornecedor->razaoSocial = "Meu Armazem ltda"; 

$fornecedor->autorizar(new Class {
    public $nome = "joão";
    public $senha = "123456";
});

var_dump($fornecedor);