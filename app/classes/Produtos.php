<?php

namespace app\Classes;

use app\database\models\Read;
use app\Interfaces\Carrinho;

class Produtos
{
    public function produtos(Carrinho $interface)
    {
        $produtos_no_carrinho = $interface->dados();

        $produtos_no_db = (new Read)->all("produtos");

        $produtos = [];
        $total    = 0;

        foreach ($produtos_no_carrinho as $produto_id => $quantidade) {
            $produto  = [...array_filter($produtos_no_db, fn ($produto) => (int) $produto->id === $produto_id)];

            $produtos[] = [
                "id"         => $produto_id,
                "nome"       => $produto[0]->nome,
                "preco"      => $produto[0]->preco,
                "quantidade" => $quantidade,
                "subtotal"   => $quantidade * $produto[0]->preco
            ];

            $total += $quantidade * $produto[0]->preco;
        }

        return [
            "produtos" => $produtos,
            "total"    => $total
        ];
    }
}