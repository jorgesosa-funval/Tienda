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
    public function show($id) // Omar
    {
        $usuario = new Usuario;
        $usuarioPar = $usuario->find($id);

        if ($usuarioPar) {
            $userData = "Nombre: " . $usuarioPar['nombre'] . "<br>";
            $userData = "Direccion: " . $usuarioPar['direccion'] . "<br>";
            $userData = "Telefono: " . $usuarioPar['telefono'] . "<br>";

            echo "Cliente: $userData";
        } else {
            echo "Cliente no encontrado";
        }
    }

    // actializar un registro
    public function update() // David
    {
    }

    // Eliminar un registro de la tabla
    public function destroy() //Jairo
    {
    }
}


// Hacer la instancia de la  Model 
// luego llama a la funcion,   le pasa el parametro
// guarda los datos en una variable y listo
// como ejemplo es lo mismo que aparece el Login  solo que en vez de guardar en una variable de sessio lo guardara en una variable y le hare return.