<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/Models/clientes.php';

class ClientesController{
    function index(){
        $cliente = new PedirClientes;
        
        $clientes = $cliente->all();


        print_r($clientes);

        
    }

}
$a = new ClientesController;

$a->index();


?>