<?php

namespace Controller;

use Models\Cliente;


require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class ClienteController
{
    //llamar todos los datos para cargar la tabla
    public function index()
    {
        $clientes = new Cliente;

        $data = $clientes->all();

        return $data;
    }

    // Mostrar un registro de la tabla
    public function show()
    {
    }

    // crear un nuevo registro
    public function strore()
    {
    }

    // actializar un registro
    public function update()
    {
    }
    
    // Eliminar un registro de la tabla
    public function destroy()
    {
    }
}
