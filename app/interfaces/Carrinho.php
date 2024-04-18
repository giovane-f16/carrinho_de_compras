<?php

namespace app\Interfaces;

interface Carrinho
{
    public function adicionar($produto);

    public function remover($produto);

    public function quantidade($produto, $quantidade);

    public function limpar();

    public function dados();

    public function dump();
}