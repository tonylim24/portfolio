import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';

class HeaderMain extends Component {
    render() {
        return (
            <div>
                <Router>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <Link to="/">
                            <img class="navbar-brand" src="https://i.imgur.com/rPSBLdw.png" width="30" height="30" alt="" />
                        </Link>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <Link to="/" class="nav-link">
                                        Intro <span class="sr-only">(current)</span>
                                    </Link>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#resume">Resume</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#projects">Projects</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://gitlab.com/tonylimmvp" target="_blank">GitLab</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://github.com/tonylim24/" target="_blank">Github</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </Router>
            </div>
        );
    }
}

export default HeaderMain;

if (document.getElementById('web-header')) {
    ReactDOM.render(<HeaderMain />, document.getElementById('web-header'));
}