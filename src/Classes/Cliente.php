<?php 

class Cliente
{
    public string $nome;
    public int $idade;
    public string $endereco;
    public string $telefone;

    public function comprar(): void
    {
        echo "O cliente {$this->nome} realizou uma compra<br>";
    }

    public function definirNome($nome): void
    {
        $this->nome = $nome;
    }
}