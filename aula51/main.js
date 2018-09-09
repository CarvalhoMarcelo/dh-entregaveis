//Exercicio 1 JSON
let txtJSON = '{"nome": "Marcelo"}'
console.log(typeof(txtJSON))
let objJSON = JSON.parse(txtJSON)
console.log(typeof(objJSON))
let objJSONtxt = JSON.stringify(objJSON)
console.log(typeof(objJSONtxt))


//Exercicio 2 JSON
let amigos = {
    qtAmigos: 10,
    nomeAmigos: ['Marcelo', 'Manoel', 'Pedro', 'Jose', 'Fabiano', 'Maria',
        'Julia', 'Carla', 'Bruna', 'Monica'
    ]
}
console.log(typeof(amigos))
console.log(amigos)
let amigosTXT = JSON.stringify(amigos)
console.log(typeof(amigosTXT))
console.log(amigosTXT)


//Exercicio 3 JSON
let meuArray = [{
    nome: "Marcelo",
    id: 1
}, {
    nome: "Bruna",
    id: 2
}, {
    nome: "Fabiana",
    id: 3
}]

console.log(typeof(meuArray))
let jsonTXT = JSON.stringify(meuArray)
console.log(typeof(jsonTXT))
let jsonOBJ = JSON.parse(jsonTXT)
console.log(typeof(jsonOBJ))
console.log(jsonOBJ)


//Exercicio 3a JSON
console.log("Nome: " + jsonOBJ[0].nome + " - ID: " + jsonOBJ[0].id)


//Exercicio 5 AJAX
let xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

        console.log(xmlhttp.responseText);
        console.log(JSON.parse(xmlhttp.responseText));

        let paises = document.forms[0].querySelector('paises')
        let resposta = JSON.parse(xmlhttp.responseText)
        let respostaArray = Object.entries(resposta.contenido)

        //Exercicio 7 AJAX (usado o getPaises porque o  as outras APIs nao estao funcionando)
        respostaArray.forEach(function(banana) {
            let pais = banana[0]
            let id = banana[1]

            let optionTAG = document.createElement("OPTION")
            let textoOption = document.createTextNode(pais)
            optionTAG.setAttribute("value", id)
            optionTAG.appendChild(textoOption)
                // document.body.appendChild(optionTAG)
                // document.getElementById("paises").appendChild(optionTAG);
            document.querySelector("#paises").appendChild(optionTAG);
        });
    }
};
//Para request via POST sempre usar o comando abaixo
// xmlhttp.setRequestHeader("Contenttype", "application/xwwwformurlencoded");
xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getPaises", true);
xmlhttp.send();


//Exercicio 9 AJAX


let botaoPessoa = document.querySelector('#btnPessoa')
botaoPessoa.addEventListener('click', pessoa)

function pessoa() {
    let xmlhttp1 = new XMLHttpRequest();
    xmlhttp1.onreadystatechange = function() {
        if (xmlhttp1.status == 200) {
            console.log(xmlhttp1.responseText);
            console.log(JSON.parse(xmlhttp1.responseText));

            //Exercicio 12 AJAX
            document.forms[0].style.display = 'none'
            let h1TAG = document.createElement('h1')
            document.body.appendChild(h1TAG)
            h1TAG.textContent = "Formulario processado com sucesso"

        } else {
            //Exercicio 10 AJAX
            // alert(JSON.parse(xmlhttp.responseText))
            alert(xmlhttp1.status)
            alert(xmlhttp1.responseText)
        }
    };
    //Para request via POST sempre usar o comando abaixo
    xmlhttp1.open("POST", "http://pilote.techo.org/?do=api.registrarPessoa", true);
    xmlhttp1.setRequestHeader("ContentType", "application/xwwwformurlencoded");

    //Exercicio 11 AJAX
    xmlhttp1.send("nomes='Marcelo'");
}