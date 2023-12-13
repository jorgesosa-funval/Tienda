<?php

namespace Controller;

use Models\Clientes;


require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class ClientesController
{

    public function index()
    {
        $clientes = new Clientes;

        $data = $clientes->all();

        return $data;
    }
}


