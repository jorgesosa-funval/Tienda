<?php

namespace Controller;

use Models\Pedido;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class PedidoController
{
    // Obter todos os dados para carregar a tabela
    public function index()
    {
        $pedidos = new Pedido;
        $data = $pedidos->all();
        return $data;
    }

    // Mostrar um registro específico da tabela com base no ID fornecido
    public function show($id)
    {
        $pedido = new Pedido();
        $data = $pedido->all($id); // Supondo que existe um método 'find' para recuperar um único registro
        return $data;
    }

    // Criar um novo registro
    public function store($data)
    {
        $pedido = new Pedido();
        $result = $pedido->create($data);
        return $result; // Retornar algum indicativo de sucesso ou falha na criação
    }

    // Atualizar um registro
    public function update($id, $data)
    {
        $pedido = new Pedido();
        $result = $pedido->update($id, $data);
        return $result; // Retornar algum indicativo de sucesso ou falha na atualização
    }

    // Excluir um registro da tabela
    public function destroy($id)
    {
        $pedido = new Pedido();
        $result = $pedido->delete($id);
        return $result; // Retornar algum indicativo de sucesso ou falha na exclusão
    }
}
