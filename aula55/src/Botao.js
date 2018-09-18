import React from 'react'

class Botao extends React.Component{
    render(){
        return(
            <button onClick={this.props.cliquei}>
                {this.props.tituloBotao}
            </button>
        )
    }
}

export default Botao