<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TCC</title>
  <link rel="stylesheet" href="estilo_Guilherme.css">
  <link rel="stylesheet" href="rodapepopup_Guilherme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
  <header class="classcabecalho"> <img src="img_Guilherme/logo3.png" class="logoimg">
    <nav>
      <div class="cardiv">
        <p class="textoTabela" hidden>Seu carrinho está vazinho =(</p>
          <div class="divCarrinho" hidden>
            <table class="tabela" border="1">
              <th class="thCarrinho" colspan="2">Item</th>
              <th class="thCarrinho">Preço</th>
              <th class="thCarrinho">Quantidade</th>
              <th class="thCarrinho">Total</th>
              <th class="thCarrinho">Apagar</th>
              <tbody class="tbody"></tbody>
            </table>
              <input type="button" value="Finalizar pedido" class="buttonCarrinho" onclick='produto.enviaPedido()'>

          </div>
      </div>
    </nav>
    <ul class="headerUL">
      <li class="headerLI"><button class="user"><i class="fa-solid fa-user-plus carrinho fa-3x"></i> </button></li>
      <li class="headerLI"><button class="menu-btn"><i class="fa-solid fa-cart-arrow-down carrinho fa-3x"></i></button>
      </li>
    </ul>
  </header>

  <br><br><br><br><br><br><br><br>

  <select class="escolha" onchange="escolher(this)">
    <option value="bebida">Bebidas</option>
    <option value="lanche">Lanches</option>
  </select>

  <br><br><br><br><br><br>

  <h1 id="bebidaTitulo">Bebidas</h1>
  <br>
  <!--Accordion-->
  <div class="container" style="width: 50%;">
    <div class="content">
      <div class="accordion_item" style="background-color: #ba7474;">
        <div class="accordion_header">
          <span>
            Filtrados
          </span>
          <div class="icon">
            +
          </div>
        </div>

        <div class="accordion_content">
          <p>
          <div class="d1">
            <button class=popup-link>
              <!-- <img class="im2" src="img/pao.jpg">--> fdfadsf Link qualquer
            </button>
          </div>
          </p>
        </div>
      </div>
      <div class="accordion_item" style="background-color: #d8d9da">
        <div class="accordion_header">
          <span>
            Miseráveis
          </span>
          <div class="icon">
            +
          </div>
        </div>

        <div class="accordion_content">
        </div>
      </div>

      <div class="accordion_item" style="background-color: #ba7474;">
        <div class="accordion_header">
          <span>
            Espresso
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
      <div class="accordion_item" style="background-color:  #d8d9da;">
        <div class="accordion_header">
          <span>
            Cappuciono
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
      <div class="accordion_item" style="background-color: #ba7474;">
        <div class="accordion_header">
          <span>
            Cafés & Chás
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
      <div class="accordion_item" style="background-color:  #d8d9da">
        <div class="accordion_header">
          <span>
            Smoothie & Frappé
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
      <div class="accordion_item" style="background-color: #ba7474;">
        <div class="accordion_header">
          <span>
            Chocolate
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>

      <div class="accordion_item" style="background-color: #d8d9da;">
        <div class="accordion_header">
          <span>
            Sucos e Refrigerantes
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
      <div class="accordion_item" style="background-color: #ba7474;">
        <div class="accordion_header">
          <span>
            Cervejas
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
      <div class="accordion_item" style="background-color: #d8d9da;">
        <div class="accordion_header">
          <span>
            Drinks
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
    </div>
  </div>

  <br><br>
  <div class="popup-fundo">
    <div class="popup">
      <div class="popup-fechar"> X </div>
      <div class="popup-content">
        <div id="Img_Lanche">
          <img class=imgp style="width: 80%; border-radius: 15px;" src="misto.jpg">
        </div>
        <input type="button" value="Adicionar ao carrinho" onclick="produto.salvar()">
      </div>
    </div>
  </div>

  <div class="fundo"> </div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <h1 id="lancheTitulo">Lanches</h1>
  <br>
  <!--Accordion-->
  <div class="container" style="width: 50%;">
    <div class="content">
      <div class="accordion_item" style="background-color: #bf9898;">
        <div class="accordion_header">
          <span>
            Quiches
          </span>
          <div class="icon">
            +
          </div>
        </div>

        <div class="accordion_content">

        </div>
      </div>
      <div class="accordion_item" style="background-color: #d8d9da;">
        <div class="accordion_header">
          <span>
            Folhados
          </span>
          <div class="icon">
            +
          </div>
        </div>

        <div class="accordion_content">

        </div>
      </div>
      <div class="accordion_item" style="background-color: #bf9898;">
        <div class="accordion_header">
          <span>
            Pão de Queijo
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">

        </div>
      </div>
      <div class="accordion_item" style="background-color: #d8d9da;">
        <div class="accordion_header">
          <span>
            Sanduiches & Omeletes
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
      <div class="accordion_item" style="background-color: #ba7474;">
        <div class="accordion_header">
          <span>
            Doces
          </span>
          <div class="icon">
            +
          </div>
        </div>
        <div class="accordion_content">
        </div>

      </div>
    </div>
  </div>
  <br>

  <!-- Rodapé-->
  <footer>
    <div class="caixa">
      <h2> Início </h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Produto</a></li>
        <li><a href="#">Download</a></li>
      </ul>
    </div>

    <div class="caixa">

      <h2>Sobre nós</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, aliquam incidunt nobis praesentium a
        dolorum dolores id quae sequi earum, doloribus eum nemo nisi accusamus impedit magnam porro aspernatur
        optio?
      </p>
    </div>
  </footer>
  <div class="rodape">
    <h2><i class="fa-solid fa-mug-saucer" aria-hidden="true"></i></h2>
    <div class="sociais">
      <div class="social"> <a href="#"> <i class="fa-brands fa-instagram" aria-hidden="true"></i> </a></div>
      <div class="social"> <a href="#"> <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> </a></div>
    </div>
  </div>

  <script src="javaScript.js"></script>
</body>

</html>