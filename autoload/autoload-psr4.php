<?php

function carregar(string $nomeCompleto)
{
    $nsRaiz = "App\\";
    $diretorioBase = __DIR__ . "/../src/";

    $tamanhoNsRaiz = strlen($nsRaiz);

    $nsRaziRecebido = substr($nomeCompleto, 0, $tamanhoNsRaiz);

    if ($nsRaiz !== $nsRaziRecebido){
        return;
    }

    $caminhoRelativo = substr($nomeCompleto, $tamanhoNsRaiz);

    $caminhoArquivo = $diretorioBase . str_replace('\\', '/', $caminhoRelativo) . ".php";

    if (file_exists($caminhoArquivo)){
        require $caminhoArquivo;
    }
}

spl_autoload_register("carregar");