<?php
include('conexao.php');

    $nm_cliente = "Claudio";
    $telefone_cliente = "31992946082";
    $nome = "Misto quente";
    $preco = "19,90";
    $qtde = $_POST["Qtde_number"];

$selecionar = "SELECT Nm_produto, Preco_produto, Nm_cliente, telefone_cliente, data_pedido, sum(Qtde_produto) Qtde_produto FROM carrinho WHERE Nm_cliente='Cláudio' GROUP BY Nm_produto, Preco_produto, Nm_cliente, telefone_cliente, data_pedido";
$selecionar_att = $conn->query($select); 
                   
if ($selecionar_att->num_rows > 0) {

    $atualizar = "UPDATE carrinho SET Qtde_produto =  1 WHERE Nm_produto='Misto quente'";
}else{
    $inserir = "INSERT INTO carrinho (Nm_cliente, telefone_cliente, Nm_produto, Preco_produto, Qtde_produto) VALUES ('".$nm_cliente."','".$telefone_cliente."','".$nome."', '".$preco."',  '".$qtde."')";       
    $conn->query($inserir);
    $conn->close();
?>