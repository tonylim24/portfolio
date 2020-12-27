import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class HeaderSkills extends Component {
    render() {
        return (
            <div>
                
            </div>
        );
    }
}

export default HeaderSkills;

if (document.getElementById('web-header-skills')) {
    ReactDOM.render(<HeaderSkills />, document.getElementById('web-header-skills'));
}