<?php

use app\Classes\Carrinho;
use app\Classes\Produtos;

session_start();

require_once "../vendor/autoload.php";

$carrinho_de_produtos = new Produtos();

$loader = new \Twig\Loader\FilesystemLoader('views/');
$twig   = new \Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
echo $twig->render("carrinho.html", [
    "produtos" => $carrinho_de_produtos->produtos(new Carrinho),
    //"total"    => $carrinho_de_produtos->produtos(new Carrinho)["total"]
]);
