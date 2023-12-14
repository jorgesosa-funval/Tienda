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
    public function show() //Victor
    {
    }

    // crear un nuevo registro
    public function store() // Arturo
    {
        $user = new Cliente();
        $user->create($_POST['nombre'], $_POST['direccion'], $_POST['telefono']);
        return $user;

        exit;
    }

    // actializar un registro
    public function update() // Aaron
    {
    }
    
    // Eliminar un registro de la tabla
    public function destroy() //michael
    {
    }
}
