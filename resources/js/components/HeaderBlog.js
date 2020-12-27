import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router, Link, Redirect, Route} from 'react-router-dom';

class HeaderBlog extends Component {
    render() {
        return (
            <Router>
                <div>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <Link to="/" class="navbar-brand">
                            <img src="https://i.imgur.com/rPSBLdw.png" width="30" height="30" alt="" />
                        </Link>
                        <p class="navbar-brand"> | Blog</p>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <Link to="/" class="nav-link">Return to Intro </Link>
                                </li>

                                <li class="nav-item active">
                                    <Link to="/blog" class="nav-link">Blog Index </Link>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </Router>
        );
    }
}

export default HeaderBlog;

if (document.getElementById('web-header-blog')) {
    ReactDOM.render(<HeaderBlog />, document.getElementById('web-header-blog'));
}