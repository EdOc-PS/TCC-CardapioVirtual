<?php
header("location: index.php");
include("conexao.php");
print_r($_GET);
$dataPedido_produto = $_GET['data'];
$img_produto = $_GET['imagem_produto'];
$nm_produto = $_GET['nome'];
$qtde_produto = $_GET['qtde'];
$preco_produto = $_GET['preco'];
$total_produto = $_GET['total'];
$status_pedido = $_GET['status'];

    $inserir = "INSERT INTO pedido (dataPedido_produto, img_produto, nm_produto,  qtde_produto, preco_produto, total_produto, status_pedido) VALUES ('".$dataPedido_produto."','".$img_produto."','".$nm_produto."', '".$qtde_produto."', '".$preco_produto."',  '".$total_produto."',  '".$status_pedido."')";
    if($conn->query($inserir)){
        echo "registro inserido";
    }
    $conn->close();
?>
