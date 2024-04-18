<?php

require_once "../vendor/autoload.php";

use app\Classes\Carrinho;

session_start();

$carrinho = new Carrinho;
$id       = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$carrinho->remover($id);

header("Location:carrinho.php");