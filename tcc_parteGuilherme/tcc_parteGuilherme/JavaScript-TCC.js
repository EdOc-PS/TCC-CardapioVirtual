//clicar na posição
function lanche(){
    const lanches = document.getElementById("lancheTitulo");
    lanches.scrollIntoView({behavior: "smooth"});
}
function bebida(){
    const bebidas = document.getElementById("bebidaTitulo");
    bebidas.scrollIntoView({behavior: "smooth"});
}
function sobremesa(){
    const sobremesas = document.getElementById("sobremesaTitulo");
    sobremesas.scrollIntoView({behavior: "smooth"});
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
