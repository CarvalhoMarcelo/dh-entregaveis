function pedeNumeros() {
    let num1 = prompt('Digite o primeiro numero: ');
    let num2 = prompt('Digite o segundo numero: ');
    let confirma = confirm('Confirma os numeros?')

    if (confirma) {
        let numMaior = parseInt(num1) > parseInt(num2) ? num1 : num2
        alert('O numero maior é o: ' + numMaior)
    } else {
        // window.location.reload()
        pedeNumeros()
    }
    pedeNumeros()
}