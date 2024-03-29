<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php
  require_once("conexao.php");
  session_start();
  unset($_SESSION["nomeFunc"]);
  unset($_SESSION["sobrenomeFunc"]);
  unset($_SESSION["emailFunc"]);
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café secreto</title>
  <link rel="stylesheet" href="../css/index-estilo.css">
  <link rel="stylesheet" href="../css/rodapepopup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
  <header class="classcabecalho"> <img src="../img/logo3.png" class="logoimg">
    <nav class="navCarrinho">
      <div class="cardiv">
        <table class="textoTabela">
          <tr>
            <th rowspan="2"><i class="fa-regular fa-face-frown fa-5x"></i></th>
            <td class="Carrinho-VazioTD"> OPS!</td>
          </tr>
          <tr>
            <td class="Carrinho-VazioTD" colspan="2">Seu carrinho esta vazio!</td>
          </tr>
        </table>
        <div class="divCarrinho" hidden>
          <table class="tabela" border="1">
            <th class="thCarrinho" colspan="2">Item</th>
            <th class="thCarrinho">Obs</th>
            <th class="thCarrinho">Preço</th>
            <th class="thCarrinho">Quantidade</th>
            <th class="thCarrinho">Total</th>
            <th class="thCarrinho">Apagar</th>
            <tbody class="tbody"></tbody>
          </table>
          <input type="button" value="Finalizar pedido" class="buttonCarrinho" onclick="produto.enviaPedido()">

        </div>
      </div>
    </nav>
    <nav class="navUser">
      <?php
      if (!isset($_SESSION["nomeCliente"])) {
        ?>
        <h1 class="tituloUsuario">Login</h1>
        <a href="login_telefone.php" class="linkUsuario">Fazer login</a>
        <?php
      } else {
        ?>
        <h1 class="tituloUsuario">Logout</h1>
        <a href="logout_telefone.php" class="linkUsuario">Sair</a>
        <?php
      }
      ?>
    </nav>

    <ul class="headerUL">
      <?php
      if (isset($_SESSION["nomeCliente"])) {
        ?>
        <p class="nomeSession">
          <?php echo $_SESSION["nomeCliente"] ?>
        </p>
        <li class="headerLI"><button class="user"><i class="fa-solid fa-user-minus carrinho fa-3x"></i></button></li>
        <?php
      } else {
        ?>
        <li class="headerLI"><button class="user"><i class="fa-solid fa-user-plus carrinho fa-3x"></i></button></li>
        <?php
      }
      ?>
      <li class="headerLI"><button class="menu-btn"><i class="fa-solid fa-cart-arrow-down carrinho fa-3x"></i></button>
      </li>
    </ul>
  </header>

  <div style="height: 24vh"></div>

  <select class="escolha" onchange="escolher(this)">
    <option value="bebida">Bebidas</option>
    <option value="lanche">Lanches</option>
  </select>

  <div style="height: 12vh"></div>

  <h1 id="bebidaTitulo" class="blog-title"> Bebidas </h1>
  <br>

  <!--Accordion-->

  <div class="container">
    <div class="content">
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Filtrados
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Filtrados'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class="popup-link">
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh; text-align: left;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="accordion_item" style="background-color: #fafdff">
        <div class="accordion_header">
          <span>
            Miseráveis
          </span>
          <div class="icon">
            +
          </div>
        </div>

        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Miseráveis'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>
      </div>

      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Espresso
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Expresso'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
      <div class="accordion_item" style="background-color:  #fafdff;">
        <div class="accordion_header">
          <span>
            Cappuccino
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Cappuccino'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Cafés & Chás
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Cafés e Chás'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
      <div class="accordion_item" style="background-color:  #fafdff">
        <div class="accordion_header">
          <span>
            Smoothie & Frappé
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Smoothie e Frappé'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Chocolate
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Chocolate'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>

      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Sucos e Refrigerantes
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Sucos e Refrigerantes'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Cervejas
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Cervejas'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Drinks
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Drinks'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
    </div>
  </div>

  <br><br>

  <h1 id="lancheTitulo" class="blog-title"> Lanches </h1>

  <br>
  <!--Accordion-->
  <div class="container2">
    <div class="content">
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Quiches
          </span>
          <div class="icon">
            +
          </div>
        </div>

        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Quiches'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Folhados
          </span>
          <div class="icon">
            +
          </div>
        </div>

        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Folhados'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Pão de Queijo
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Pão de Queijo'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Sanduiches & Omeletes
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Sanduiches e Omeletes'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
      <div class="accordion_item" style="background-color: #fafdff;">
        <div class="accordion_header">
          <span>
            Doces
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
          <?php
          $sql = "SELECT * FROM item WHERE subtipoItem='Doces'";
          $resultado = $conn->query($sql);
          while ($exibir = $resultado->fetch_assoc()) {
            if (str_contains($exibir["precoItem"], "@@")) {
              $exibir["precoItem"] = str_replace("@@", "", $exibir["precoItem"]);
            }
            ?>
            <p>
            <div class="d1">
              <button class=popup-link>
                <table>
                  <tr>
                    <td style="width: 5vh;"> <img src="../imagens/<?php echo $exibir['nomeImg']; ?>" class="im2"></td>
                    <th style="width: 15vh;" class="nomeTable">
                      <?php echo $exibir['nomeItem']; ?>
                    </th>
                    <td style="width: 10vh;" class="precoTable">R$
                      <?php echo $exibir['precoItem']; ?>
                    </td>
                  </tr>
                </table>
                <p hidden class="descTable">
                  <?php echo $exibir["descItem"]; ?>
                </p>
              </button>
            </div>
            </p>
            <br>
            <?php
          }
          ?>
        </div>

      </div>
    </div>
  </div>

  <br><br>

  <!-- Rodapé-->
  <footer>
    <div class="caixa">
      <h2><i class="fa-regular fa-clock"></i> Horarios:</h2>
      <ul>
        <li>Quinta a Segunda</li>
        <li>15:30 - 21:00</li>
      </ul>
    </div>

    <div class="caixa">

      <h2> <i class="fa-solid fa-map-location-dot"></i> Endereço:</h2>
      <p>
        Av. Frederico Varnhagem, 50 Loja 01 - Pioneiros
      </p>
    </div>
  </footer>
  <div class="rodape">
    <h2><i class="fa-solid fa-mug-saucer" aria-hidden="true"></i></h2>
    <div class="sociais">
      <div class="social"> <a href="https://www.instagram.com/secretocafe_/"> <i class="fa-brands fa-instagram"
            aria-hidden="true"></i> </a></div>
    </div>
  </div>

  <div class="popup-fundo">
    <div class="popup">
      <div class="popupbranco">
        <div class="popup-fechar"><i class="fa-solid fa-square-xmark fa-2x"></i></div>
        <div class="popup-content">
          <table class="popup-tabela" border=0>
            <tr class="popuptr">
              <td colspan=2> <img class="popup-tabimg" src="img/pao.jpg"></td>
            </tr>
            <tr class="popuptr">
              <th colspan=2>
                <h3 class="tituloDiv"> Titulo </h3>
              </th>
            </tr>
            <tr class="popuptr" id="rowDesc">
              <td colspan=2>
                <p class="descDiv">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis qui perferendis
                  enim laudantium
                  natus?</p>
              </td>
            </tr>
            <tr class="popuptr" id="rowObs">
              <td colspan=2>
                <textarea class="textpop" placeholder="Observações: "></textarea>
              </td>
            </tr>
            <tr class="popuptr">
              <td colspan=2>
                <div class="radio">

                </div>
              </td>
            </tr>
            <tr class="popuptr">
              <td style="width: 50%; text-align: left; text-indent: 3.5ch">
                <input type="button" class="popup-button" value="+" onclick="proximo_item()">
                <input type="text" class="popup-input" id="qtde" name="qtde" readonly>
                <input type="button" class="popup-button" value="-" onclick="voltar_item()">
              </td>
              <td style="width: 50%;">
                <?php
                if (isset($_SESSION["nomeCliente"])) {
                  ?>
                  <button onclick="produto.salvar()" class="popup-addbot1">
                    <p class="custoDiv">R$ 50,00</p>
                  </button><button class="popup-addbot" onclick="produto.salvar()"> Adicionar ao carrinho <i
                      class="fa-solid fa-cart-plus"></i></button>
                  <?php
                } else {
                  ?>
                  <button onclick="login_telefone()" class="popup-addbot1">
                    <p class="custoDiv">R$ 50,00</p>
                  </button><button class="popup-addbot" onclick="login_telefone()"> Faça login para adicionar itens
                  </button>
                  <?php
                }
                ?>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="fundo"></div>
  <script src="../javascript/indexScript.js"></script>
</body>

</html>