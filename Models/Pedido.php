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

    public function delete($id)
    {
        try {
            $query = 'DELETE FROM pedidos WHERE id = :id';
            $stm = $this->conexion->prepare($query);
            $stm->bindParam(':id', $id, \PDO::PARAM_INT);
            $stm->execute();

            return true; // Retorna verdadeiro se a exclusão for bem-sucedida
        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false; // Retorna falso se houver um erro na exclusão
        }
    }

    public function create($data)
    {
        try {
            $query = 'INSERT INTO pedidos (clientes_id, fecha_pedido, total) VALUES (:clientes_id, :fecha_pedido, :total)';
            $stm = $this->conexion->prepare($query);
            $stm->bindParam(':clientes_id', $data['clientes_id']);
            $stm->bindParam(':fecha_pedido', $data['fecha_pedido']);
            $stm->bindParam(':total', $data['total']);
            $stm->execute();

            return true; // Retorna verdadeiro se a criação for bem-sucedida
        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false; // Retorna falso se houver um erro na criação
        }
    }

    public function update($id, $data)
    {
        try {
            $query = 'UPDATE pedidos SET clientes_id = :clientes_id, fecha_pedido = :fecha_pedido, total = :total WHERE id = :id';
            $stm = $this->conexion->prepare($query);
            $stm->bindParam(':clientes_id', $data['clientes_id']);
            $stm->bindParam(':fecha_pedido', $data['fecha_pedido']);
            $stm->bindParam(':total', $data['total']);
            $stm->bindParam(':id', $id);
            $stm->execute();

            return true; // Retorna verdadeiro se a atualização for bem-sucedida
        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false; // Retorna falso se houver um erro na atualização
        }
    }
}
