window.onload = function() {

    //Exercicio 1 SELETORES
    document.getElementById("titular").style.display = 'none'

    //Exercicio 2 SELETORES
    // document.getElementById('lechuza').style.filter = 'grayscale(100%)'
    document.querySelector('#lechuza').style.opacity = 0.70
    setInterval(function() {
        document.querySelector('#lechuza').style.opacity = 0.05;
    }, 2000);
    setInterval(function() {
        document.querySelector('#lechuza').style.opacity = 0.70;
    }, 3000);


    //Exercicio 3 SELETORES
    //console.log(document.querySelectorAll("input, texttarea"))
    let cores = document.querySelectorAll("input")
    let cores1 = document.querySelectorAll("textarea")
    cores.forEach(function(value) {
        value.style.backgroundColor = "red"
    });
    cores1.forEach(function(value) {
        value.style.backgroundColor = "red"
    });


    //Exercicio 1 DOM
    let elemento = document.querySelector('#copyright')
    console.log(elemento.attributes)

    //Exercicio 2 DOM
    let enderecoTwitter = document.querySelector('.icon.fa-twitter')
    console.log(enderecoTwitter.getAttribute("href"))


    //Exercicio 3 DOM
    let enderecoFacebook = document.querySelector('.icon.fa-facebook')
    console.log(enderecoFacebook.getAttribute("href"))

    //Exercicio 4 DOM
    let enderecoYoutube = document.querySelector('.icon.fa-youtube')
    enderecoYoutube.setAttribute("href", "https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA")
    console.log(enderecoYoutube.getAttribute("href"))

    //Exercicio 5 DOM
    let botaoAction = document.querySelectorAll('form')
    let achei = ''
    botaoAction.forEach(function(value) {
        if (value.hasAttribute("action")) {
            console.log(value.getAttribute("action"))
        } else {
            console.log("Nao existe o attributo action")
        }
    })

    //Exercicio 6 DOM
    let mudaElemento = document.querySelectorAll('form')
    mudaElemento.forEach(function(value) {
        if (value.hasAttribute("url")) {
            let endereco = value.getAttribute("url")
            value.removeAttribute("url")
            value.setAttribute('action', endereco)
            console.log(value.attributes)
        }
    })

    //Exercicio 7 DOM
    let mudaH2 = document.querySelectorAll('h2')
    mudaH2.forEach(function(value) {
        value.style.color = "red"
    })


    //Exercicio 8 DOM
    let mudaCorIcons = document.querySelectorAll('.icon')
    mudaCorIcons.forEach(function(value) {
        value.style.color = 'blue'
    })


}