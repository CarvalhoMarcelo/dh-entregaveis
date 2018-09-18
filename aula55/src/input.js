import React from 'react'

class Input extends React.Component{
    render(){
        return(
            <input type={this.props.tipo} 
                   onChange={this.props.alteracao}
                   value={this.props.valor}>
            </input>
        )    
    }
}

export default Input