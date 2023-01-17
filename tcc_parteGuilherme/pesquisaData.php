<link rel="stylesheet" href="estilo_PedidoFinalizados.css">
<?php 

include_once('conexao.php');
               $pesquisar = $_POST["pesquisa"];
                if($pesquisar != ""){
                list($ano, $mes, $dia) = explode("-", $pesquisar);
                $data = $dia."/".$mes."/".$ano;
                $select = "SELECT * FROM `pedido` WHERE dataPedido_Produto like '%$data%'";
                }else{
                $select = "SELECT * FROM `pedido` WHERE dataPedido_Produto";    
                }    
                $pedidosPedentes = $conn->query($select);
                
                if($pedidosPedentes->num_rows > 0){    
             ?>
            <div class="divPedido">
                <div class="divPedidoBranca">  
                    <table class='tabela' border='1'>
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Quantidade</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Total</th>
                        </tr>
                            <?php
                                while($exibirPedido = $pedidosPedentes->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><img src="<?php echo $exibirPedido['img_produto']?>"></td>
                                    <td><?php echo $exibirPedido['nm_produto']?></td>
                                    <td><?php echo $exibirPedido['dataPedido_produto']?></td>
                                    <td><?php echo $exibirPedido['qtde_produto']?></td>
                                    <td class='td_desc'><?php echo $exibirPedido['desc_produto']?></td>
                                    <td><?php echo $exibirPedido['preco_produto']?></td>
                                    <td><?php echo $exibirPedido['total_produto']?></td>                
                                </tr>
                                <?php
                                    }
                                ?>
                    </table>
                <?php            
                    }else{
            ?> 
                                <script>
                            const divPedidoBranca_Pedente = document.querySelector('.divPedidoBranca_Pendente');
                            divPedidoBranca_Pedente.classList.remove("divPedidoBranca_Pendente");
                            divPedidoBranca_Pedente.classList.add("divPedidoBranca_vazia");
                        </script>
                        <p class='textoPedido'>Não há pedidos!</p>  
                </div>
            </div>     
                <?php 
                    }
                ?> 