<?php

// require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/Database.php';

// class ClientFile {
//     private $conn;

//     public function __construct() {
       
//         $database = new Database();
//         $this->conn = $database->getConn();
//     }

//     function all() {
//         $sql = "SELECT * FROM clientes";
//         $stm = $this->conn->prepare($sql);
//         $stm->execute();
//         return $stm->fetchAll(PDO::FETCH_ASSOC);
//     }
// }

// $prueba = new ClientFile;
// $a = $prueba->all();
// print_r($a);
