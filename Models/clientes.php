<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/Database.php';

class PedirClientes
{
    private $conn;

    public function __construct()
    {
        $database = new Database();

        $this->conn = $database->getConn();
    }

    public function all()
    {
        $sql = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
