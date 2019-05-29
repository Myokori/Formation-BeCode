import React from 'react';
import logo from './logo.svg';
import AddTask from './Addtask.js'
import '../css/App.css';

function App() {
  return (
    <div className="App">
      <header>
        <h1>React To-Do List</h1>
        <img src={logo} className="App-logo" alt="logo" />
      </header>
      <section className="main-container">
        <div className="search-bar">
          <input type="text" placeholder="search"/>
        </div>
        <div className="row">

        <section className="col-lg-6 archived">
          <div className="card">
            test
          </div>
        </section>
        </div>
        <div className="addtask">
          <AddTask />
        </div>
      </section>
    </div>
    );
}

export default App;
