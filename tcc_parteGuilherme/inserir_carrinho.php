<?php
    header("location: ../index.php");
    define('HOST', 'localhost');
    define('USER', 'root'); 
    define('PASSWORD', ''); 
    define('DB', 'carrinho_bd'); 
    
    try { 
     $conn = new mysqli(HOST, USER, PASSWORD, DB);
    }catch (mysqliException $error) {
    
    }
    $nm_cliente = "Claudio";
    $telefone_cliente = "31992946082";
    $preco = "19,90";
    $qtde = $_POST["Qtde_number"];
    $nm_produto= $_GET['Produto'];
    $select = "SELECT Nm_produto, Preco_produto, Nm_cliente, telefone_cliente, data_pedido, sum(Qtde_produto) Qtde_produto FROM carrinho WHERE Nm_cliente='Cláudio' GROUP BY Nm_produto, Preco_produto, Nm_cliente, telefone_cliente, data_pedido";
    $result = $conn->query($select); 
                   
    if ($result->num_rows > 0) {

    $atualizar = "UPDATE carrinho SET Qtde_produto = (Qtde_produto + '$qtde') WHERE Nm_produto='Pao_Queijo'";
    $conn->query($atualizar);
    }else{
     $inserir = "INSERT INTO carrinho (Nm_cliente, telefone_cliente, Nm_produto, Preco_produto, Qtde_produto) VALUES ('".$nm_cliente."','".$telefone_cliente."','".$nm_produto."', '".$preco."',  '".$qtde."')";
     $conn->query($inserir);
    $conn->close();
    }
?>