import React, { Component } from 'react';
import ReactDOM from 'react-dom';

var getCurrentYear = new Date().getFullYear();

class Footer extends Component {
    render() {
        return (
            <div>
                <footer className="footer-copyright">
                    <div className="social">
                        <a button href="https://linkedin.com/in/tonylim39/" className="logo-linkedin" target="_blank" rel="noreferrer" title="LinkedIn">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                        <a button href="https://gitlab.com/tonylimmvp" className="logo-gitlab" target="_blank" rel="noreferrer" title="GitLab">
                            <ion-icon name="logo-gitlab"></ion-icon>
                        </a>
                        <a button href="https://github.com/tonylim24/" className="logo-github" target="_blank" rel="noreferrer" title="Github">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                        <a button href="mailto:tonolim24@gmail.com" className="icon-mail" target="_blank" rel="noreferrer" title="Email Me">
                            <ion-icon name="mail-outline"></ion-icon>
                        </a>
                        <a button href="tel:+1-604-719-8251" className="icon-call" target="_blank" rel="noreferrer" title="Call Me">
                            <ion-icon name="call-outline"></ion-icon>
                        </a>
                        <a button href="/#" className="icon-resume" target="_blank" rel="noreferrer" title="View Resume">
                        <ion-icon name="document-outline"></ion-icon>
                        </a>
                    </div>
                    <div className="copyright">&copy; {getCurrentYear} Tony Lim</div>
                </footer>
            </div>
        );
    }
}

export default Footer;

if (document.getElementById('web-footer')) {
    ReactDOM.render(<Footer />, document.getElementById('web-footer'));
}