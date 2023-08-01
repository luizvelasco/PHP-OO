<?php 

class Cliente
{
    public string $nome;
    public int $idade;
    public string $endereco;
    public string $telefone;

    public function comprar()
    {
        echo "O cliente {$this->nome} realizou uma compra<br>";
    }

    public function definirNome($nome){
        $this->nome = $nome;
    }
}