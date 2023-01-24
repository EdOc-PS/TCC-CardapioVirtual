<?php

    define('HOST', 'localhost:3307');
    define('USER', 'root'); 
    define('PASSWORD', ''); 
    define('DB', 'enviapedidos'); 

    try { 
        $conn = new mysqli(HOST, USER, PASSWORD, DB);
       }catch (mysqliException $error) {
        }
?>