const input = document.querySelector("#cel");

input.addEventListener('keypress', () => {
    let inputlenght = input.value.length;

    if(inputlenght === 0){
        input.value += "("
    }

    if(inputlenght === 3){
        input.value += ") "
    }

    if(inputlenght === 6){
        input.value += " "
    }
    if(inputlenght === 11){
        input.value += "-"
    }
})

// Animação fundo//
const ulFundo = document.querySelector("ul.fundo");

for(let e = 0; e < 11; e++){

    const li = document.createElement("li");
    const random =  (min, max) => Math.random() * (max - min) + min;
      const size = Math.floor(random(10, 200));
      const position = random(1, 99);
        const delay = random(5, 0.1);  
        const duration = random(24, 12);

      li.style.width = `${size}px`;
        li.style.height = `${size}px`;
          li.style.bottom = `-${size}px`;
            li.style.left = `${position}%`;
              li.style.animationDelay = `${delay}s`
              li.style.animationDuration = `${duration}s`
              li.style,AnimationTimingFunction = `cubic-bazier(${Math.random()}, ${Math.random()}, ${Math.random()}, ${Math.random()})`    

      ulFundo.appendChild(li);
}