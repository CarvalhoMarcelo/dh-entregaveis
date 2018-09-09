//Exercicio 1 Eventos
let botao1 = document.querySelector('#botao1')
let temCor = false;
let i = 0;
let pTAG = document.createElement('p')
document.body.appendChild(pTAG)
let apertei = function() {
    alert('Voce clicou em mim')

    if (temCor) {
        document.body.style.background = "red";
        temCor = false;
    } else {
        document.body.style.background = "green";
        temCor = true;
    }
    i += 1
    pTAG.textContent = 'Clique número ' + i
        // document.querySelector('#tagP').innerHTML = 'Clique número ' + i

}
botao1.addEventListener("click", apertei)

//Exercicio 2 Eventos
let botao = document.querySelector('#botao1')
    // let teclado = function(e) {
    //     if (e.keyCode == 83 || e.keyCode == 115) {
    //         botao.removeEventListener('click', apertei)
    //     }
    //     if (e.keyCode == 80 || e.keyCode == 112) {
    //         botao.addEventListener('click', apertei)
    //     }
    // }
function teclado(e) {
    if (e.keyCode == 83 || e.keyCode == 115) {
        botao.removeEventListener('click', apertei)
    }
    if (e.keyCode == 80 || e.keyCode == 112) {
        botao.addEventListener('click', apertei)
    }
}
document.addEventListener("keypress", teclado)

// document.addEventListener("keypress", function(e) {
//     // console.log(e.keyCode)
//     let botao = document.querySelector('#botao1')
//     if (e.keyCode == 83 || e.keyCode == 115) {
//         botao.removeEventListener('click', apertei)
//     }
//     if (e.keyCode == 80 || e.keyCode == 112) {
//         botao.addEventListener('click', apertei)
//     }
// });


//Exercicio 4 EVENTOS
let seg = 0;
let min = 0;
let hor = 0;

let divS = document.querySelector('#segundos')
let divM = document.querySelector('#minutos')
let divH = document.querySelector('#horas')

function cronometro() {

    setInterval(function() {
        seg += 1
        divS.textContent = seg + ' Segundo(s)'
        if (seg == 60) {
            seg = 0
            min += 1
            divS.textContent = seg + ' Segundo(s)'
            divM.textContent = min + ' Minuto(s) '
            if (min == 60) {
                seg = 0
                min = 0
                hor += 1
                divS.textContent = seg + ' Segundo(s)'
                divM.textContent = min + ' Minuto(s) '
                divH.textContent = hor + ' Hora(s)'
            }
        }
    }, 1000)


}
window.onload = cronometro



//Exercicio 5 Eventos

let botoes = document.querySelectorAll('.botoes')
let x = 0
let valor = ''
calculadora()
let valores = 0
let tmp = 0
let tmp1 = 0
let visor = document.querySelector('#visor')
let total = document.querySelector('#total')
let operacao = ""

function calculadora() {
    botoes.forEach(function() {
        botoes[x].addEventListener('click', function() {
            valor = this.textContent
            console.log(valor)
            if (valor != "+" && valor != "-" && valor != "/" && valor != "*" && valor != "=" && valor != "C") {
                valores += valor
                visor.value = parseInt(valores)
            }
            if (valor == "C") {
                visor.value = "0"
                total.textContent = ""
                tmp = 0
                valores = 0
            }
            if (valor == "+") {
                operacao = valor
                if (parseInt(tmp) == 0 && parseInt(valores) == 0) {
                    tmp = parseInt(visor.value)
                } else {
                    tmp += parseInt(valores)
                    valores = 0
                }
                tmp1 = tmp
                visor.value = 0
                total.textContent = "(" + tmp + ")"
            }
            if (valor == "-") {
                operacao = valor
                if (parseInt(tmp) == 0 && parseInt(valores) == 0) {
                    tmp = parseInt(visor.value)
                } else {
                    tmp -= parseInt(valores)
                    valores = 0
                }
                tmp1 = tmp
                visor.value = 0
                total.textContent = "(" + tmp + ")"
            }
            if (valor == "*") {
                operacao = valor
                if (parseInt(tmp) == 0 && parseInt(valores) == 0) {
                    tmp = parseInt(visor.value)
                } else {
                    if (tmp == 0) {
                        tmp = parseInt(valores)
                    } else {
                        tmp *= parseInt(valores)
                    }
                    valores = 0
                }
                tmp1 = tmp
                visor.value = 0
                total.textContent = "(" + tmp + ")"
            }
            if (valor == "/") {
                operacao = valor
                if (parseInt(tmp) == 0 && parseInt(valores) == 0) {
                    tmp = parseInt(visor.value)
                } else {
                    if (tmp == 0) {
                        tmp = parseInt(valores)
                    } else {
                        tmp /= parseInt(valores)
                    }
                    valores = 0
                }
                tmp1 = tmp
                visor.value = 0
                total.textContent = "(" + tmp + ")"
            }

            if (valor == "=") {
                switch (operacao) {
                    case "+":
                        tmp1 = parseInt(visor.value) + parseInt(tmp1)
                        break
                    case "-":
                        if (parseInt(visor.value > parseInt(tmp1))) {
                            tmp1 = parseInt(visor.value) - parseInt(tmp1)
                        } else {
                            tmp1 = parseInt(tmp1) - parseInt(visor.value)
                        }
                        // tmp1 = parseInt(visor.value) - parseInt(tmp1)
                        break
                    case "*":
                        tmp1 = parseInt(visor.value) * parseInt(tmp1)
                        break
                    case "/":
                        // if(tmp1 > 0){
                        tmp1 = parseInt(tmp1) / parseInt(visor.value)
                            // }else{

                        // }
                        // tmp1 = parseInt(visor.value) / parseInt(tmp1)
                        break


                }
                // console.log("Operacao: " + operacao + "-" +
                //     "TMP: " + tmp + "-" +
                //     "Valores: " + valores + "-" +
                //     "TMP1: " + tmp1)
                tmp = 0
                valores = 0
                visor.value = tmp1
                tmp1 = 0
                total.textContent = ""
                operacao = ""
                    // console.log("Operacao: " + operacao + "-" +
                    //     "TMP: " + tmp + "-" +
                    //     "Valores: " + valores + "-" +
                    //     "TMP1: " + tmp1)
            }
        })
        x++
    })
}

//Exercicio 6 Eventos
let cont = 0
let conta = document.querySelector('#caixa')
let passei = document.querySelector('#contar')

function contador() {
    cont += 1
    passei.textContent = 'Você passou o mouse ' + cont + ' vez(es) por aqui!'

}
conta.addEventListener('mouseover', contador)




fetch('https://jsonplaceholder.typicode.com/albums/1/photos')
    .then((resposta) => resposta.json())
    .then(console.log())
    .then(mostrarNaTela)

function mostrarNaTela(banana) {
    let conteudo = ''
    let secao = document.querySelector('#secao')

    //USANDO MAP
    conteudo = banana.map(get =>
            '<section><div>' + get.title + '</div><div><img src="' + get.thumbnailUrl + '"></div></section>'
        )
        // O Join substitui as virgulas do array. Nesse caso abaixo removeu a virgula por espaco vazio
    secao.innerHTML = conteudo.join('')

    // let paises = document.forms[0].querySelector('paises')
    // let resposta = JSON.parse(xmlhttp.responseText)
    // let respostaArray = Object.entries(resposta.contenido)

    // respostaArray.forEach(function(banana) {
    //     let pais = banana[0]
    //     let id = banana[1]

    //     let optionTAG = document.createElement("OPTION")
    //     let textoOption = document.createTextNode(pais)
    //     optionTAG.setAttribute("value", id)
    //     optionTAG.appendChild(textoOption)    
    //     document.querySelector("#paises").appendChild(optionTAG);
    // });

    /***********************************************/

    // USANDO ARROW
    // banana.forEach(post => {
    //     // console.log(post.title)

    //     let title = post.title
    //     let body = post.body

    //     conteudo += '<h2>' + title + '</h2>'
    //     conteudo += '<p>' + body + '</p>'
    // });
    // document.body.innerHTML = conteudo

    /***********************************************/

    //Funcao normal
    // banana.forEach(function(post) {
    //     // console.log(post.title)

    //     let title = post.title
    //     let body = post.body

    //     conteudo += '<h2>' + title + '</h2>'
    //     conteudo += '<p>' + body + '</p>'


    // });
    // document.body.innerHTML = conteudo

}