<?php

namespace Controller;

use Models\Cliente;
use Models\Usuario;

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
    public function show() // Omar
    {
    }

    // actializar un registro
    public function update() // David
    {
    }
    
    // Eliminar un registro de la tabla
    public function destroy() //Jairo
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
    
            $usuario = new Usuario;
            $usuario->delete($id);
            
        }
    }
}
