<?php

    define('HOST', 'localhost');
    define('USER', 'root'); 
    define('PASSWORD', ''); 
    define('DB', 'enviapedido'); 

    try { 
        $conn = new mysqli(HOST, USER, PASSWORD, DB);
       }catch (mysqliException $error) {
        }
?>