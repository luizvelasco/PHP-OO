<?php

class Produto
{
    public const NORMA = "1050";
    public $titulo;
    public $descricao = "Cerveja Brasileira";
    public $preco;

    public function defineCodidoBarras ($codigo)
    {
        $this->codigoBarras = $codigo;
    }

    public function acessaCodigoBarras ()
    {
        echo "<BR>" . $this->codigoBarras;
    }
}
