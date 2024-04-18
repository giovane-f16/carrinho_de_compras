<?php

namespace app\database;

use PDO;
use PDOException;

class Conectar
{
    private static $pdo = null;

    public static function conectar()
    {
        try {
            if (!static::$pdo) {
                static::$pdo = new PDO("mysql:host=localhost;dbname=carrinho", "root", "", [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            }
            return static::$pdo;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}