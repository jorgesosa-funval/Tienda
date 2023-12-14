<?php

namespace Controller;

use Models\Producto;

use PDO;


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
    public function store($nombre, $producto) // Raysell
    {
       $producto = new Producto;
       $producto -> create($nombre, $producto);
    }

    // actializar un registro
    public function update() //Derek 
    {
    }

    // Eliminar un registro de la tabla
    public function destroy($id, $usuario, $contraseña)
    {
        $conn = new PDO("mysql:host=localhost;dbname=tiendita", $usuario, $contraseña);
        $sql = "DELETE FROM productos WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "Se eliminó el registro correctamente.";
        } else {
            echo "No se encontró el registro a eliminar.";
        }
    }
}
