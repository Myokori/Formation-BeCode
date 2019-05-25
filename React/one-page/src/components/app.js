import React, {Component} from 'react';
import Header from '../components/header.js';
import Footer from '../components/footer.js';
import Content from '../components/content.js';


class App extends Component{
    render(){
        return(
            <main>
                <Header />
                <section id="content">
                    <Content />
                </section>
                <Footer />
            </main>
        );
    }
}

export default App;