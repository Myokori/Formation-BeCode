import React, { Component } from 'react';
import logo from '../assets/logo.svg';
import '../css/App.css';
/* import { establishments } from './establishements/Fixtures';
 */import Establishment from './establishements/Establishement';
import Rebase from 're-base';
import app from './Base';
let base = Rebase.createClass(app.database());

// Le paramètre title est ajouté aux props que nous fournit la classe Component
export default class App extends Component {
    constructor(props) {
        // Ne pas oublier d'appeler le constructeur père ! (Obligatoire)
        super(props);
        // On définit le state de notre component que l'on hérite de la classe "Component"
        // Cela remplace la fonction "getInitialState"
        this.state = {
            pseudo  : "Inconnu",
            searchStringUser: "",
            establishments: [
                {
                    id          : "0890786GH",
                    name        : "Biberium",
                    description : "Un super bar karaoké"
                },
                {
                    id          : "0890786GD",
                    name        : "Brew Dogs",
                    description : "Un super bar à bière"
                },
                {
                    id          : "MJLMH0389",
                    name        : "Batonier",
                    description : "Un super bar de fin de soirée"
                }
            ]
        }
    }
    handleChange(e){
        this.setState({searchStringUser: e.target.value});
      }
      componentDidMount() {
        this.firebase = base.syncState('count', {
          context: this,
          state: 'count',
          asArray: true,
        });
      }

      componentWillUnmount() {
        base.removeBinding(this.firebase);
      }

    // On définit la fonction appelée lors d'un clic sur le lien "Changer le pseudo !"
    // la syntaxe  " nomFonction = () => {} " nous permet de conserver le contexte `this` du scope courant. (Ici, la classe App)
    randomPseudo = () => {
        // On s'amuse un peu ;)
        let randomPseudo    = ""
        const possible      = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"
        const size          = Math.floor(Math.random() * 10) + 5
        for( let i=0; i < size; i++ ){
            randomPseudo += possible.charAt(Math.floor(Math.random() * possible.length))
        }
        // On met à jour le state via la fonction "setState" héritée de la classe Component
        this.setState({
            pseudo : randomPseudo
        })
    }

  render() {
    console.log("render")
    const establishementFilter = establishments.filter((searchText) =>{
        let search = searchText.name + " " + searchText.description;
        return search.toLowerCase().match(this.state.searchStringUser);
    })
      const listEstablishment = establishments.map( (establishment) => {
        return (
            <Establishment
                key={ establishment.id }
                establishment={ establishment } // on n'a pas oublié la props "establishment" :)
            />
        )
    })

      // On peut ainsi facilement l'utiliser grâce à l'objet this.props
      return (
        <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h2>Welcome "{ this.state.pseudo }" to { this.props.title }</h2>
        </header>
        <div className="App-intro">
            {/* On appelle notre fonction lors du clic sur le lien */}
            <p> <a onClick={ this.randomPseudo } >Changer le pseudo !</a> </p>
            <div>
                <input
                    type="text"
                    placeholder="search"
                    value={this.state.searchStringUser}
                    onChange={this.handleChange.bind(this)}
                />
            </div>
            <section>
                { listEstablishment }
            </section>
        </div>
      </div>

      );
  }
}


