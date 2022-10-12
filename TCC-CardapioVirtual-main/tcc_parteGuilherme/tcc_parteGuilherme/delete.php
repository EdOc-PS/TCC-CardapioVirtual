<?php
define('HOST', 'localhost');
define('USER', 'root'); 
define('PASSWORD', ''); 
define('DB', 'carrinho_bd'); 

try { 
 $conn = new mysqli(HOST, USER, PASSWORD, DB);
}catch (mysqliException $error) {

}
 $delete = "DELETE FROM carrinho WHERE Qtde_produto = 2";
 $conn->query($delete);
?>
