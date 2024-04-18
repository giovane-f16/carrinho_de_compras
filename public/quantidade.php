<?php

require_once "../vendor/autoload.php";

use app\Classes\Carrinho;

session_start();

$quantidade = filter_input(INPUT_GET, "quantidade", FILTER_SANITIZE_NUMBER_INT);
$id         = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$carrinho = new Carrinho;
$carrinho->quantidade($id, $quantidade);

header("Location:carrinho.php");