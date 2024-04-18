<?php

namespace app\database\models;

use app\database\Conectar;

abstract class Model
{
    protected $conectar;

    public function __construct()
    {
        $this->conectar = Conectar::conectar();
    }
}