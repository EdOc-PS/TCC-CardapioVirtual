<?php
header("location: verPedidos.php");
require_once('conexaoPedido.php');
echo $_POST['idHidden'];
$deletarPedido = 'DELETE from pedido where id_pedido='.$_POST['idHidden'];
$conn->query($deletarPedido);
?>