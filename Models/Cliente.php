<?php

namespace Models;

use Models\Database;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class Cliente
{
    private $conexion;
    public function __construct()
    {
        $database = new Database;
        $this->conexion = $database->getConn();
    }

    // mostrar todos los clientes
    public function all()
    {

        $query = 'SELECT * FROM clientes';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute();
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    //encontrar un cliente donde id es igual a ?
    public function find($id) // Victor
    {

        $query = 'SELECT * FROM clientes Where id = ?';

        try {
            
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
            $rs = $stm->fetch(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    //crear un cliente
    public function create($nombre, $direccion, $telefono) // arturo 
    {

        $query = '';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$nombre, $direccion, $telefono]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    //actualizar un cliente
    public function update($id) //Aaron
    {

        $query = '';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    // eliminar un cliente
    public function delete($id) //Michael
    {

        $query = '';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
