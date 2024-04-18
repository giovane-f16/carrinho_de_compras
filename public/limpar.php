<?php

require_once "../vendor/autoload.php";

use app\Classes\Carrinho;

session_start();

$carrinho = new Carrinho;
$carrinho->limpar();

header("Location:carrinho.php");