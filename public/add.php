<?php

require_once "../vendor/autoload.php";

use app\Classes\Carrinho;

session_start();

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$carrinho = new Carrinho;
$carrinho->adicionar($id);

header("Location: /");