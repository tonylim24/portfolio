import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class HeaderBlog extends Component {
    render() {
        return (
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a href="/" class="navbar-brand">
                        <img src="https://i.imgur.com/rPSBLdw.png" width="30" height="30" alt="" />
                    </a>
                    <p class="navbar-brand"> | Blog</p>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Return to Intro </a>
                            </li>

                            <li class="nav-item active">
                                <a href="/blog" class="nav-link">Blog Index </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        );
    }
}

export default HeaderBlog;

if (document.getElementById('web-header-blog')) {
    ReactDOM.render(
        <HeaderBlog />, document.getElementById('web-header-blog')
    );
}