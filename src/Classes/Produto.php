<?php

class Produto
{
    const NORMA = "1050";
    public string $titulo;
    public string $descricao = "Cerveja Brasileira";
    public float $preco;

    function defineCodigoBarras($codigo) {
        $this->codigoBarras = $codigo;
    }

    function acessaCodigoBarras() {
        echo $this->codigoBarras;
        echo "<br>";
    }
}