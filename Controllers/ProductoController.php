<?php

namespace Controller;

use Models\Producto;


require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class ProductoController
{
    //llamar todos los datos para cargar la tabla
    public function index()
    {
        $clientes = new Producto;

        $data = $clientes->all();

        return $data;
    }
    
    // Mostrar un registro de la tabla
    public function show() //Mateus
    {
    }

    // crear un nuevo registro
    public function store() // Raysell
    {
    }

    // actializar un registro
    public function update() //Derek 
    {
        $id = $_POST['id'];
        $nombre_producto = $_POST['nombre_producto'];
        $precio = $_POST['precio'];

        $producto = new Producto();
        $producto->update($id, $nombre_producto, $precio);

    }
    
    // Eliminar un registro de la tabla
    public function destroy()//Miguel
    {
    }
}
