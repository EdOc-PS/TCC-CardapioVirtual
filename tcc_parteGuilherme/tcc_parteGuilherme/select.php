<link rel="stylesheet" href="estilo.css">
<?php                        
  define('HOST', 'localhost');
  define('USER', 'root'); 
  define('PASSWORD', ''); 
  define('DB', 'carrinho_bd'); 
                   
  try { 
  $conn = new mysqli(HOST, USER, PASSWORD, DB);
  }catch (mysqliException $error) {

  }
       
  $select = "SELECT Nm_produto, Preco_produto, Nm_cliente, telefone_cliente, data_pedido, sum(Qtde_produto) Qtde_produto FROM carrinho WHERE Nm_cliente='Cláudio' GROUP BY Nm_produto, Preco_produto, Nm_cliente, telefone_cliente, data_pedido";
  $result = $conn->query($select); 
                   
  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        
                        $Nm_cliente = $row["Nm_cliente"];
                        $Telefone_cliente = $row["telefone_cliente"];
                        $Nm_produto = $row["Nm_produto"];
                        $preco_produto = $row["Preco_produto"];
                        $qtde = $row["Qtde_produto"];
                        $total = $preco_produto* $qtde;
                        $data_pedido= $row["data_pedido"];
                        echo 
                            '<tr>'.                       
                            '<td>'.$Nm_produto.'</td>'.
                            '<td>'.$preco_produto.'</td>'.
                            '<td>
                            <form action= "update.php" method="POST">
                            
                            <input type = number name=number_carrinho value ='.$qtde.'></input>
                            
                            </form>
                            </td>'.
                            '<td>'.$total.'</td>'.
                            '<td>
                             <form action="delete.php">'.
                            '<button>Apagar</button></td>'.
                            '</form>'.                              
                            '</tr>
                            ';                                                              
                    }
                  } else {
                    echo "Seu carrinho está vazio!";
                  }
                  
           ?>