<?php
include_once __DIR__ . "/../modelo/gerenciar_pedidos_modelo.php";
include_once __DIR__ . "/../modelo/marmita_modelo.php";

header('Content-Type: application/json');

$payload = file_get_contents('php://input');
$pedido = json_decode($payload, true);
$gerenciarPedido = new GerenciarPedidosModelo(
    pedidoModelo: PedidoModelo::factoryOnlyID($pedido['ID_pedido'])
);


$pedidoExcluido = $gerenciarPedido->excluirPedido();

if ($pedidoExcluido) {
    echo json_encode(value: ["status" => true]);
    exit;
}
echo json_encode(value: ["status" => false]);
