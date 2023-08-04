<?php

class Produto
{
    const NORMA = "1050";
    public string $titulo;
    public string $descricao = "Cerveja Brasileira";
    public float $preco;

    function defineCodigoBarras(string $codigo): void 
    {
        $this->codigoBarras = $codigo;
    }

    function acessaCodigoBarras(): void 
    {
        echo $this->codigoBarras;
        echo "<br>";
    }
}