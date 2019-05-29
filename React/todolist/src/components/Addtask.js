import React, { Component } from 'react';


export default class AddTask extends Component{
    constructor(props){
        super(props);
        this.state = {value: ''};
        
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }
    
    handleChange(event){
        this.setState({value : event.target.value});
    }
    
    handleSubmit(event){
        // Insérer ici le code pour la génération des LI dans la CARD
        alert('New task: ' + this.state.value);
        event.preventDefault();
    }
    render(){
        return (
        <div className="todo-add">
            <section className="col-lg-6 todo">
                <div className="card">
                <li><input type="checkbox"/></li>
                </div>
            </section>
            <form onSubmit={this.handleSubmit}>
                <input type="text" placeholder="Add Task" value={this.state.value} onChange={this.handleChange} />
                <button type="submit">Add</button>
            </form>
        </div>
        )
    }
}
