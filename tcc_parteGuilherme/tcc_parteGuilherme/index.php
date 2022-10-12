<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="popestilos.css">
    <link rel="stylesheet" href="rodape.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>


<body>
    <header> <img src="logo3.png" class="logoimg">
        <nav>

            <table>
                <thead>

                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("select.php");
                    ?>
                </tbody>
            </table>
        </nav>
        <button class="menu-btn">
            <img src="carrinho.png" class="carrinho">
        </button>
    </header>
    <div class="car"> Cardapio </div>
    <br><br><br><br><br><br><br><br><br><br>


    <button onclick="lanche()">Lanches</button>
    <button onclick="bebida()">Bebidas</button>
    <button onclick="sobremesa()">Sobremesa</button>

    <h1 id="lancheTitulo">Lanches</h1>

    <div class="d1">
        <button class=popup-link> <img class="im2" src="pao.jpg"></button>
    </div>
    <div class="popup-fundo">
        <div class="popup">
            <div class="popup-fechar"> X </div>
            <div class="popup-content">
                <div id="Img_Lanche">
                    <img class=imgp style="width: 80%; border-radius: 15px;" src="misto.jpg">
                </div>
                <form action="inserir_carrinho.php" method='POST'>
                    <input name="Qtde_number" type= 'number'></input>
                    
                    <input type="submit" name="btnSalvar" value="Adicionar ao carrinho">
                </form>               
            </div>
        </div>
    </div>
    <br><br>
    <h1 id="bebidaTitulo">Bebidas</h1>
    <br><br>
    <h1 id="sobremesaTitulo">Sobremesa</h1>


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

            <h2>Informções</h2>
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Email</a></li>
            </ul>
        </div>
        <div class="caixa">

            <h2>Suporte</h2>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Telefone</a></li>
                <li><a href="#">Chat</a></li>
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
        <h2> Logo </h2>
        <div class="sociais">
            <div class="social"> <a href="#"> <i class="fa-brands fa-instagram" aria-hidden="true"></i> </a></div>
            <div class="social"> <a href="#"> <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> </a></div>
        </div>
    </div>


    <script src="./JavaScript-TCC.js"></script>
    <script src="./popupjs.js"></script>

</body>

</html>