//clicar na posição
function escolher(valor){
    if(valor.value=="lanche"){
        const lanches = document.getElementById("lancheTitulo");
        lanches.scrollIntoView({behavior: "smooth"});
    }
    if(valor.value=="bebida"){
        const bebidas = document.getElementById("bebidaTitulo");
        bebidas.scrollIntoView({behavior: "smooth"});
    }
   
}

//carrinho
const btn = document.querySelector('.menu-btn');
const nav = document.querySelector('nav');
btn.onclick = function()
{
    this.classList.toggle('active');
    nav.classList.toggle('active');
}

//add carrinho
function proximo_item(){
     let select = document.getElementById("qtde");
    if(document.getElementById("qtde").value!=4){
     let soma = parseInt(select.value) + 1;
      document.getElementById("qtde").value = soma;
    }
}
function voltar_item(){
    let select = document.getElementById("qtde");
   if(document.getElementById("qtde").value!=0){
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

 function diminuirHeader(){
    if(window.pageYOffset > 0 && header.classList.contains("classcabecalho")){
        header.classList.remove("classcabecalho");
        header.classList.add("classcabecalhomin");
         logoimg.style.width ="65px";
         logoimg.style.height ="62.5px";
    
        
    } else if(window.pageYOffset == 0 && header.classList.contains("classcabecalhomin")){
        header.classList.add("classcabecalho");
        header.classList.remove("classcabecalhomin");
         logoimg.style.width ="120px";
         logoimg.style.height ="115px";
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