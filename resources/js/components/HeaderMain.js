import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class HeaderMain extends Component {
    render() {
        return (
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a href="/">
                        <img class="navbar-brand" src="https://i.imgur.com/rPSBLdw.png" width="30" height="30" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a to="/" class="nav-link">
                                    Intro <span class="sr-only">(current)</span>
                                </a>
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
            </div>
        );
    }
}

export default HeaderMain;

if (document.getElementById('web-header')) {
    ReactDOM.render(<HeaderMain />, document.getElementById('web-header'));
}