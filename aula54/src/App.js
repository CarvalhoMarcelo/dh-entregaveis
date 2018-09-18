import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {

    constructor() {
        super();

        this.state = {
            first: 0,
            second: 0,
            banana:0,
            minhaLista:[],
            itemLista:"",
            texto:''

        }
    }

    //Exercicio 3
    lista(event){
        this.setState({
            texto: event.target.value,
            itemLista: event.target.value,
        })
    }

    adicionarItem(event){
        const arr = [
            // os 3 pontos antes dos this extrai os valores individuais do array
            ...this.state.minhaLista,
            this.state.itemLista            
        ];
        this.setState({
            minhaLista: arr,
            texto: ''
        })        

        // alert(this.state.minhaLista)

    }

    //************************************************************************************** */

    //Exercicio 2
    armazena(event) {
        const valor = event.target.value;
        
        const nome = event.target.name;
        this.setState({
            [nome]: valor,

        });
    }
    soma() {        
        const resultado = parseInt(this.state.first) + parseInt(this.state.second)
        this.setState({
            resultado
        })
    }

    //************************************************************************************** */

    //Exercicio 1
    aumetarNumero(){
        let numero = this.state.banana;
        this.setState ({
            banana: ++numero,
        })
    }
    diminuirNumero(){
        let numero = this.state.banana;
        this.setState({
            banana: --numero,
        })
    }

    render() {
        // console.log(this.state);
        return ( 
            <div>                                                
                <div className = "App">
                    <header className = "App-header">
                        <img src = { logo }
                            className = "App-logo"
                            alt = "logo"/>
                        <h1 className = "App-title"> Bem Vindo Marcelo! Você é um programador REACT </h1>  
                    </header> 
                    <p className = "App-intro">
                        To get started, edit <code> src / App.js </code> and save to reload.  
                    </p> 
                </div>
                <div>
                    <h1>Exercicio 1 - REACT</h1>
                    <p>Numero: {this.state.banana}</p>                    
                    <button onClick={this.aumetarNumero.bind(this)}>Aumentar</button>
                    <button onClick={this.diminuirNumero.bind(this)}>Diminuir</button>
                </div>
                <p></p><p></p>
                <div>
                    <h1>Exercicio 2 - REACT</h1>
                    <input type = "number" name = "first" onChange = { this.armazena.bind(this) }/>                         
                    <input type = "number" name = "second" onChange = { this.armazena.bind(this) }/>  
                    <button onClick = { this.soma.bind(this) } > Calcular </button>   
                    {
                        // Se for verdadeiro usa o && para mostrar o resultado
                        // this.state.resultado && `Olá Marcelo, o resultado é  + $(resultado)`
                        this.state.resultado && `Ola Marcelo, o resultado da soma é ${this.state.resultado}`
                    } 
                </div> 
                <div>
                    <h1>Exercicio 3 - REACT</h1>
                    <h2>To do List</h2>                    
                    <input type = "text" onChange = {this.lista.bind(this)} value = {this.state.texto}/>                         
                    <button onClick = { this.adicionarItem.bind(this) } > Adicionar </button>   
                    <ul>
                        {
                            this.state.minhaLista.map(abacate => 
                                <li>{abacate}</li>
                            )
                        }
                    </ul>

                </div> 


            </div >
        );
    }
}
export default App;