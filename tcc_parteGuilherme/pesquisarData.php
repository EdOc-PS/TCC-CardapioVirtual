<?php 
include('conexao.php');
$data = $_POST['textPesquisar'];
echo $data;
        $select = 'SELECT `img_produto`, `nm_produto`, `qtde_produto`, `desc_produto`, `preco_produto`, `total_produto`, `dataPedido_produto`, `status_pedido`, `id_pedido` FROM `pedido` WHERE `dataPedido_produto='.$data;
        $pedidosPedentes = $conn->query($select);
        if($pedidosPedentes->num_rows > 0){    
             
        }
             ?>