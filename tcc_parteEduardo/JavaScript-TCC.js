//clicar na posição
function escolher(valor) {
    if (valor.value == "lanche") {
        const lanches = document.getElementById("lancheTitulo");
        lanches.scrollIntoView({ behavior: "smooth" });
    }
    if (valor.value == "bebida") {
        const bebidas = document.getElementById("bebidaTitulo");
        bebidas.scrollIntoView({ behavior: "smooth" });
    }

}

//carrinho
const btn = document.querySelector('.menu-btn');
const btnuser = document.querySelector('.user');
const nav = document.querySelector('nav');
const fund = document.querySelector('.fundo');
const imgcart = document.querySelector('.fa-solid.fa-cart-arrow-down');
const imguser = document.querySelector('.fa-solid.fa-user-plus');


btn.onclick = function () {
    this.classList.toggle('active');
    nav.classList.toggle('active');
   
    if (imgcart.classList.contains("fa-cart-arrow-down")) {
        btnuser.classList.remove("user"); 
        btnuser.classList.add("user2");
          imgcart.classList.remove("fa-cart-arrow-down"); 
          imgcart.classList.add("fa-circle-xmark"); 
            imguser.classList.remove("fa-user-plus"); 
           /*subir botão com o click*/
      } 
    else { 
        imgcart.classList.remove("fa-circle-xmark"); 
        imgcart.classList.add("fa-cart-arrow-down");
          imguser.classList.add("fa-user-plus");
            btnuser.classList.remove("user2");
            btnuser.classList.add("user");    
      }
}
btn.addEventListener('click', () => {
    if(fund.style.display == 'block'){
        fund.style.display = 'none';
        function unloadScrollBars() {
            document.documentElement.style.overflow = 'auto';
            document.documentElement.style.overflowX = 'hidden';
            document.body.scroll = "no";
        }
        unloadScrollBars();    
    }else{
        fund.style.display = 'block';
    }
    function unloadScrollBars() {
        document.documentElement.style.overflow = 'hidden';
        document.body.scroll = "no";
    }
    unloadScrollBars();
})

//add carrinho
function proximo_item() {
    let select = document.getElementById("qtde");
    if (document.getElementById("qtde").value != 4) {
        let soma = parseInt(select.value) + 1;
        document.getElementById("qtde").value = soma;
    }
}
function voltar_item() {
    let select = document.getElementById("qtde");
    if (document.getElementById("qtde").value != 0) {
        let soma = parseInt(select.value) - 1;
        document.getElementById("qtde").value = soma;
    }
}
function Add_carrinho() {

    var select = document.getElementById("qtde");
    var opcaoValor = select.options[select.selectedIndex].value;
    Misto = ("Quantidade de Misto Quente: " + opcaoValor);
    document.write(Misto);
}

//cabecalho
const header = document.querySelector("header");
const logoimg = document.querySelector(".logoimg");

window.addEventListener("scroll", diminuirHeader);

function diminuirHeader() {
    if (window.pageYOffset > 0 && header.classList.contains("classcabecalho")) {
        header.classList.remove("classcabecalho");
        header.classList.add("classcabecalhomin");
        logoimg.style.width = "65px";
        logoimg.style.height = "62.5px";


    } else if (window.pageYOffset == 0 && header.classList.contains("classcabecalhomin")) {
        header.classList.add("classcabecalho");
        header.classList.remove("classcabecalhomin");
        logoimg.style.width = "120px";
        logoimg.style.height = "115px";
    }
}

//popups
const popdiv = document.querySelector('.popup-link');
const popup = document.querySelector('.popup-fundo');


popdiv.addEventListener('click', () => {
    popup.style.display = 'block';
    function unloadScrollBars() {
        document.documentElement.style.overflow = 'hidden';
        document.body.scroll = "no";
    }
    unloadScrollBars();
})

popup.addEventListener('click', event => {
    const classClickedElement = event.target.classList[0];
    if (classClickedElement === 'popup-fechar' || classClickedElement === 'popup-fundo') {
        popup.style.display = 'none'
        function unloadScrollBars() {
            document.documentElement.style.overflow = 'auto';
            document.documentElement.style.overflowX = 'hidden';
            document.body.scroll = "no";
        }
        unloadScrollBars();
    }
})

//accordion 
const accordion_item = document.querySelectorAll(".accordion_item");

accordion_item.forEach((item) => {
    const accordion_header_item = item.querySelector(".accordion_header");

    accordion_header_item.addEventListener("click", () => {
        const accordion_content_item = item.querySelector(".accordion_content");

        const item_actived = document.querySelector(".activeacc");

        VerifyActive(item, accordion_content_item, item_actived);
    });
});

function VerifyActive(item, content, content_actived) {
    const icon_item = item.querySelector(".icon");
    const icon_item_active = document.querySelectorAll(".icon");

    icon_item_active.forEach((item) => (item.innerHTML = "+"));

    if (content_actived) {
        content_actived.style.height = 0;
        content_actived.classList.remove("activeacc");
    }

    if (content !== content_actived) {
        icon_item.innerHTML = "-";
        content.classList.add("activeacc");
        content.style.height = content.scrollHeight + 10 + "px";
    }
}
