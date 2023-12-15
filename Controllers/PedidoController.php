<?php

namespace Controller;

use Models\Pedido;
use Models\Cliente;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class PedidoController
{
    //llamar todos los datos para cargar la tabla
    public function index()
    {
        $pedido = new Pedido;

        $data = $pedido->all();

        require_once $_SERVER['DOCUMENT_ROOT'] . '/Views/tablePedidos.php';
    }

    // Mostrar un registro de la tabla
    public function show($id)
    {
        $usuario = new Pedido;
        $usu = $usuario->find($id);

        if ($usu) {
            $userData = "Nombre: " . $usu['id'] . "<br>";
            $userData = "Direccion: " . $usu['fecha_pedido'] . "<br>";
            $userData = "Telefono: " . $usu['total'] . "<br>";

            echo "Cliente: $userData";
        } else {
            echo "Cliente no encontrado";
        }
    }

    // actializar un registro
    public function updateView()
    {
        $pedido = new Pedido;
        $data = $pedido->all();
        require_once $_SERVER['DOCUMENT_ROOT'] . '/Views/update.php';
    }


    // crear un nuevo registro
    public function strore()
    {
    }

    

    // Eliminar un registro de la tabla
    public function destroy(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $pedido = new Pedido;
            $pedido->delete($id);


            header('location: ../index.php?controller=PedidoController&action=index');
        }
    }
}




