import React from 'react'
import Botao from './Botao.js'
import Input from './input.js'
import Paragrafo from './Paragrafo'

class App extends React.Component{
    constructor(){
      super()

      this.state = {
        minhaLista: [],
        itemLista: '',
        banana: 0,
        loading: true,        
        texto: '',
      }

    }

    //************************************************************************************** */

    //Exercicio 1

    componentDidMount(){
      setTimeout(() => {
        this.setState({
          loading: false
        });
      }, 4000);
    }

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

   //************************************************************************************** */


    //Exercicio 2

    abacate(event){
      this.setState({
        itemLista: event.target.value,
        texto: this.itemLista
      })
    }

    abacaxi(){
      const novoArray = [
        // os 3 pontos extrai o valor de um array
        ...this.state.minhaLista,
        this.state.itemLista
      ]
      this.setState({
        minhaLista: novoArray,
        texto: ''
      })
    }

    render(){
      const {loading} = this.state;
      const {name} = this.props;
      return (
        <div>

          <p>{loading ? 'Carregando...' : `Ola ${name}`}</p>

          <div>
              <h1>Exercicio 1 - REACT</h1>
              <Paragrafo texto = {`Numero: ${this.state.banana}`}/>              
              <Botao cliquei={this.aumetarNumero.bind(this)} tituloBotao="Aumentar"/>
              <Botao cliquei={this.diminuirNumero.bind(this)} tituloBotao="Diminuir"/>
          </div>

          <p></p><p></p>
          <br></br>

          <h1>Exercicio 2 - REACT</h1>
          <h2>To do List</h2>                    
          <br></br>
          <Input tipo = "text" 
                 alteracao = {this.abacate.bind(this)}
                 valor = {this.state.texto}
          />
          <br></br><br></br>
          <Botao tituloBotao = "Inserir"
                 cliquei = {this.abacaxi.bind(this)}/>
          <ul>
          TODO LIST
          <br></br><br></br>
              {
                  this.state.minhaLista.map((itensAchados, index) => 
                      <li key={index}>{itensAchados}</li>
                  )
              }
          </ul>


        </div>
      )
    }
}

export default App;
