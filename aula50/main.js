// let formulario = document.querySelector('form1')
let formulario = document.forms[0]
let x = formulario.elements.length
let elemento = formulario.elements

formulario.onsubmit = function(event) {
    event.preventDefault()
    for (i = 0; i < x; i++) {

        if (elemento[i].type === 'radio') {
            if (elemento['sexo'].value === '') {
                alert('Preencha o Sexo')
                break
            }

            if (elemento['sexo'].value == "Masculino") {
                document.body.style.background = "red"
            } else if (elemento['sexo'].value == "Feminino") {
                document.body.style.background = "pink"
            } else {
                document.body.style.background = "yellow"
            }

        } else if (elemento[i].type === 'checkbox') {
            elemento['noticias'].checked = true
        } else {
            if (elemento[i].tagName != 'BUTTON') {
                if (elemento[i].value === '') {
                    alert('Preencha o campo ' + elemento[i].name + " - " + elemento[i].type)
                    elemento[i].focus()
                    break
                }
            }
        }
        if (elemento['senha'].value !== elemento['senha1'].value) {
            alert('O campo Senha e Confirmação Senha precisam serem iguais')
            elemento['senha'].focus()
            break
        }

    }
}

function limpaFormulario() {
    for (i = 0; i < x; i++) {

        if (elemento[i].type === 'checkbox') {
            elemento[i].checked = false
        }

        if (elemento[i].type === 'radio') {
            elemento[i].checked = false
        } else {
            if (elemento[i].tagName != 'BUTTON') {
                elemento[i].value = ''
            }
        }
    }
}


function criarTAG() {

    document.forms[0].style.display = 'none'

    let ulTAG = document.createElement('ul')
    document.body.appendChild(ulTAG)
    for (i = 0; i < x; i++) {
        if (elemento[i].tagName != 'BUTTON') {
            let liTAG = document.createElement('li')
            document.body.appendChild(liTAG)
            liTAG.textContent = 'Nome do Campo: ' + elemento[i].name + ' - Valor do Campo: ' + elemento[i].value;
        }

    }
}