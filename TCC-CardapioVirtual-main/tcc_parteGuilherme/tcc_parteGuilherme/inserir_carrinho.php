<?php
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
    $nome = "Misto quente";
    $preco = "19,90";
    $qtde = $_POST["Qtde_number"];
    
    $sql = "INSERT INTO carrinho (Nm_cliente, telefone_cliente, Nm_produto, Preco_produto, Qtde_produto) VALUES ('".$nm_cliente."','".$telefone_cliente."','".$nome."', '".$preco."',  '".$qtde."')";
    
    if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registro inserido com sucesso.');</script>";
    echo "<script>window.location = 'lista.php';</script>";
    } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
    echo "<script>window.history.back();</script>";
    }
    $conn->close();
?>