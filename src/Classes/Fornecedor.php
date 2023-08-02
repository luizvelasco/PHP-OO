<?php

class Fornecedor
{
    const PAIS = "Brasil";
    public string $razaoSocial;
    public string $nomeFantasia;
    public int $cnpj;

    function autorizar($usuario)
    {
        if ($usuario->nome == "joão" && $usuario->senha == "123456"){
            echo "<br>Autorizado";
        } else {
            echo "<br>Bloqueado";
        }
    }
}