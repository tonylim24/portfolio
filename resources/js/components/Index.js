import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import "./stylesheets/index.css";

class Index extends Component {
    render() {
        return (
            <div className="main-container">
                <div className="blog">
                    <div className="blog-title">
                        <h1>Tony Lim</h1>
                    </div>

                    <div className="blog-description">
                        <p>Aspiring to grow in the web and software development industry on a world class level.</p>
                    </div>
                </div>

                <div className="resume">
                
                </div>

            </div>
        );
    }
}

export default Index;

if (document.getElementById('body-example')) {
    ReactDOM.render(<Index />, document.getElementById('body-example'));
}