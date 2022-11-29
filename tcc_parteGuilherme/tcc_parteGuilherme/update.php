<?php
    header("location: index.php");
    define('HOST', 'localhost');
    define('USER', 'root'); 
    define('PASSWORD', ''); 
    define('DB', 'carrinho_bd'); 
    
    try { 
     $conn = new mysqli(HOST, USER, PASSWORD, DB);
    }catch (mysqliException $error) {
    
    }
    var QTDE = array();
    $qtde_update = $_POST["number_carrinho"];
    $Preco_produto = $qtde_update * 19;
       
       
    $sql = "UPDATE carrinho SET Qtde_produto =  '$qtde_update' WHERE Nm_produto='Misto quente'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro inserido com sucesso.');</script>";
        } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
        echo "<script>window.history.back();</script>";
        }
    $conn->close();
?>