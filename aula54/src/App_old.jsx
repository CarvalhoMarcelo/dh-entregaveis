import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {

    constructor() {
        super();

        this.state = {
            first: 0,
            second: 0
        }
    }

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

    render() {
        console.log(this.state);
        return ( 
                <div>
                    <div className = "App">
                        <header className = "App-header">
                            <img src = { logo }
                                className = "App-logo"
                                alt = "logo" />
                            <h1 className = "App-title" > Bem Vindo Marcelo! Você é um programador REACT </h1>  
                        </header> 
                        <p className = "App-intro">
                            To get started, edit <code> src / App.js </code> and save to reload.  
                        </p> 
                    </div>
                    <div>
                        <input type = "number" name = "first" onChange = { this.armazena.bind(this) }/> 
                        
                        <input type = "number" name = "second" onChange = { this.armazena.bind(this) }/>  
                        <button onClick = { this.soma.bind(this) } > Calcular </button>   
                        {
                            // Se for verdadeiro usa o && para mostrar o resultado
                            this.state.resultado && `Olá Allan, o resultado é $(resultado)`
                        } 
                    </div> 
                </div >
    );
}
}

export default App;