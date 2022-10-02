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

