//Exercicio 2
cumprimento = document.querySelector('#cumprimentar')
cumprimento.onclick = function() {
    alert('ola')
}

//Exercicio 3
cor = document.querySelector('#cor')
cor.onclick = function() {
    document.body.style.background = 'green'
}

//Exercicio 4
let tagP = document.createElement('p')
    // tagP.id = "mouse"
document.body.appendChild(tagP)
let imagem = document.querySelector('#imagem')
    // let mouse1 = document.querySelector('#mouse')
imagem.onmouseover = function() {
    tagP.textContent = "estou vendo a imagem"
}

//Exercicio 5
imagem.onclick = function() {
    tagP.textContent = "estou clicando na imagem"
}


//Exercicio 6 e 7
document.body.addEventListener('click', mudaCor)

function mudaCor() {
    document.body.style.background = "red"
    alert('Esse evento sera desativado!')
    setTimeout(function() {
        document.body.style.background = "white"
        document.body.removeEventListener('click', mudaCor)
    }, 3000)

}

//Exercicio 8
let enviar = document.querySelector("#idade")
document.querySelector("#formulario").onsubmit = function(event) {
    event.preventDefault()
    if (enviar.value < 18) {
        alert('Nao autorizado!')
    } else {
        formulario.submit()
    }
}


//Exercicio 9
document.body.addEventListener('mouseover', function(event) {
    console.log(event.clientX)
    console.log(event.clientY)
})


//Exercicio 1 - TIMERS
let tempo10 = setTimeout(function() {
    alert('Voce esta a 10 segundos nessa pagina')
}, 10000)

//Exercicio 2 - TIMERS
let tempo8 = setInterval(function() {
    alert('Passou 8 segundos')
}, 8000)


//Exercicio 3 - TIMERS
setTimeout(function() {
    alert('desativando o Timeout e o Interval')
    clearTimeout(tempo10)
    clearInterval(tempo8)
}, 12000)