let num1;
let num2;

function pede2Numeros() {
    num1 = prompt("Informe o primeiro numero: ")
    num2 = prompt('Informe o segundo numero')
    confirmaNumeros()
}

function confirmaNumeros() {
    let confirma = confirm('Voce tem certeza dos numeros inseridos')
    if (!confirma) {
        pede2Numeros()
    } else {
        if (num1 > num2) {
            alert('O maior numero é o primeiro numero inserido: ' + num1)
        } else {
            alert('O maior numero é o segundo numero inserido: ' + num2)
        }
    }
}

pede2Numeros()