<?php

namespace app\database\models;

class Read extends Model
{
    public function all($tabela, $colunas = "*")
    {
        try {
            $query = $this->conectar->query("select {$colunas} from {$tabela}");
            $query->execute();

            return $query->fetchAll();
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }
}