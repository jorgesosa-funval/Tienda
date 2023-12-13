<?php

namespace Controller;

use Models\Cliente;


require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class ClientesController
{

    public function index()
    {
        $clientes = new Cliente;

        $data = $clientes->all();

        return $data;
    }
}


