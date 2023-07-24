<?php 

class Cliente
{
    public string $nome;
    public int $idade;
    public string $endereco;
    public string $telefone;

    public function comprar()
    {
        echo "O cliente realizou uma compra";
    }
}