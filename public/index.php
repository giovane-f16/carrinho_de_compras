<?php

use app\Classes\Carrinho;
use app\database\models\Read;

require_once "../vendor/autoload.php";

session_start();

$carrinho = new Carrinho;
$read     = new Read;

$produtos = $read->all("produtos");

$produtos_no_carrinho = $carrinho->dados();

$loader = new \Twig\Loader\FilesystemLoader('views/');
$twig   = new \Twig\Environment($loader, []);

echo $twig->render("index.html", [
    "produtos" => $produtos,
    "quantidade" => count($produtos_no_carrinho)
]);
