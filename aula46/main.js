//Exercicio 1
function elevarAoSegundo(numero1, numero2) {
    console.log('Exercicio 1 = ', (numero1 ** numero2))
}


//Exercicio 2
// let quadrado = function(numero) {
//     return numero * numero
// }
// let resultado = quadrado(5)
// console.log('Exercicio 2', resultado)

//Exercicio 4
// function trianguloRetangulo(lado1, lado2) {
//     function hipotenusa() {
//         return (lado1 ** 2) + (lado2 ** 2)
//     }

//     return ((Math.sqrt(hipotenusa() + lado1 + lado2)))
// }
// let resultado1 = trianguloRetangulo(2, 2)
// console.log('Exercicio 3', resultado1)


//Exercicio 5
function meuSanduiche(ingrediente1, ingrediente2, callback) {
    console.log("Estou comendo um sanduiche de " + ingrediente1 + " com " + ingrediente2)
    callback()
}

function callback() {
    console.log("Terminei de comer meu sanduiche!")
}

//Auxiliar dos exercicios de ARRAY
function array20() {
    let oArray = []
    for (i = 1; i <= 20; i++) {
        oArray.push(i)
    }
    return oArray
}
var enigma = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e", 6, "r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e", 3,
    "r", 2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5, 7, "i", 4, "a", 5, 2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3,
    "c", 2, 3, 1, 5, 3, 2, "l", 3, "a", 4, "v", 5, "e", 6
];

//Exercicio 1 ARRAY
function meuArray() {
    let oArray = array20()
    console.log(oArray)
    oArray.forEach(function(value, index) {
        if (value % 7 === 0) {
            console.log('Exercicio 1 sobre ARRAYs = ' + value)
        }
    })
}


//Exercicio 2 ARRAY
function oResultado() {
    let oArray = array20()
    let arrayResultado = oArray.map(function(value, index) {
        return Math.sqrt(value)
    })
    console.log('Exercicio 2 sobre ARRAYs = ' + arrayResultado)
}

//Exercicio 3 ARRAY
function resolveEnigma() {

    let resultado = enigma.filter(function(value, index) {
        return typeof(value) === "string"
    })
    let texto = ''
    resultado.forEach(function(value, index) {
        if (index === 2)
            texto += ' '
        if (index === 15)
            texto += ' '
        if (index === 17)
            texto += ' '
        if (index === 19)
            texto += ' '

        texto += value
    })
    console.log('Exercicio 3 sobre ARRAY = ' + texto)
}

//Exercicio 4 ARRAY
function numeroRua() {
    let numeros = enigma.filter(function(value, index) {
        return typeof(value) === "number"
    })
    let nrRua = numeros.reduce(function(total, valor) {
        return total + valor
    }, 0)
    console.log('Exercicio 4 sobre ARRAY = ' + nrRua)
}


function criarPessoa() {

    //Exercicio 1 OBEJTOS
    let pessoa = {
        idade: 18,
        nome: "Marcelo",
        sobrenome: "Carvalho",
        sexo: "Masculino",
        estado_civil: "Solteiro",
        filmes_prefefiros: ["Matrix", "Caçada Virtual", "Piratas da Informatica"]
    };

    //Exercicio 2 OBJETOS
    console.log(pessoa)

    //Exercicio 3 OBJETOS
    pessoa.idade = 19
    console.log(pessoa)

    //Exercicio 4 OBJETOS
    pessoa.cumprimento = function() {
        return ('Olá ' + this.nome + " " + this.sobrenome)
    };

    //Exercicio 5 OBJETOS
    console.log(pessoa.cumprimento())

    //Exercicio 6 OBJETOS
    pessoa.comer = function(comida) {
        return ('Estou comendo: ' + comida)
    }

    //Exercicio 7 OBJETOS
    console.log(pessoa.comer('macarrão'))

}