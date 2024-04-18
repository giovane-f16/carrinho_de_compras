<?php

namespace app\Classes;

use app\Interfaces\Carrinho as InterfacesCarrinho;

class Carrinho implements InterfacesCarrinho
{
    public function adicionar($produto)
    {
        if (!isset($_SESSION["carrinho"])) {
            $_SESSION["carrinho"] = [];
        }

        if (!isset($_SESSION["carrinho"][$produto])) {
            $_SESSION["carrinho"][$produto] = 1;
        } else {
            $_SESSION["carrinho"][$produto] += 1;
        }
    }

    public function remover($produto)
    {
        if (isset($_SESSION["carrinho"][$produto])) {
            unset($_SESSION["carrinho"][$produto]);
        }
    }

    public function quantidade($produto, $quantidade)
    {
        if (isset($_SESSION["carrinho"][$produto])) {
            if ($quantidade == 0 || $quantidade == "") {
                $this->remover($produto);
                return;
            }
            $_SESSION["carrinho"][$produto] = $quantidade;
        }
    }

    public function limpar()
    {
        if (isset($_SESSION["carrinho"])) {
            unset($_SESSION["carrinho"]);
        }
    }

    public function dados()
    {
        if (isset($_SESSION["carrinho"])) {
            return $_SESSION["carrinho"];
        }
        return [];
    }

    public function dump()
    {
        var_dump($_SESSION["carrinho"]);
    }
}
