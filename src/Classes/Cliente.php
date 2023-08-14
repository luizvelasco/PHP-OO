<?php 

namespace App\Classes;

class Cliente
{
    public string $nome;
    public int $idade;
    public string $endereco;
    public string $telefone;

    public function __construct(string $nome, string $telefone, int $idade)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->idade = $idade;
    }

    public function comprar(): void
    {
        echo "O cliente {$this->nome} realizou uma compra<br>";
    }

    public function definirNome($nome): void
    {
        $this->nome = $nome;
    }

    public function __destruct()
    {
        echo "O obj foi destruído";
    }
}