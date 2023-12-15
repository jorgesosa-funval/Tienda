<?php

namespace Models;

use Models\Database;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class Pedido
{
    private $conexion;
    public function __construct()
    {
        $database = new Database;
        $this->conexion = $database->getConn();
    }

    // Mostrar todos los pedidos
    public function all()
    {

        $query = 'SELECT pedidos.id as pedido_id, clientes.nombre, pedidos.fecha_pedido, pedidos.total From pedidos INNER JOIN clientes ON clientes.id = pedidos.clientes_id';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute();
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Encontrar un pedido donde el id sea igual ?
    public function find($id){

        $query = 'SELECT * FROM usuarios Where id = ?';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);
            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }


    // Crear un pedido
    public function create($nombre, $direccion, $telefono){

        $query = 'INSERT INTO `usuarios`(`nombre`, `direccion`, `telefono`) VALUES (?,?,?)';

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$nombre, $direccion, $telefono]);
        }catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Actualizar un pedido
    public function update($nombre, $direccion, $telefono, $id){
    
        $query = "UPDATE `clientes` SET `nombre`= ?,`direccion`=?,`telefono`=? WHERE `id`=?";
        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$nombre, $direccion, $telefono, $id]);
        } catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    // Eliminar un pedido
    public function delete($id){

        $query = 'DELETE FROM usuarios WHERE id = ? ';
        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$id]);
        }catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

}
