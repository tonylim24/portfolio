import React, { Component } from 'react';
import './stylesheets/Student.css';

class Student extends Component {
    constructor(props) {
        super(props);
        this.state = {
            displayInfo: false,
        };
        this.toggleInfoDisplay = this.toggleInfoDisplay.bind(this);
        this.addStudentTag = this.addStudentTag.bind(this);
    }

    calculateAvgGrade(student) {
        let gradesSum = 0;
        let averageGrade = 0;
        for (let i = 0; i < student.grades.length; i++) {
            gradesSum = gradesSum + parseInt(student.grades[i]);
        }
        averageGrade = gradesSum / student.grades.length;
        return averageGrade;
    }

    toggleInfoDisplay(){
        this.setState({
            displayInfo: !this.state.displayInfo
        });
    }

    addStudentTag(event){
        if(event.key === 'Enter'){
            // Do not refresh page
            event.preventDefault();
            // Passing student id, and tag value that we will add on parent.
            this.props.onAddStudentTag(this.props.student.id, event.target.value);
        }
    }

    render() {
        return (
            <div id="student-container">
                <img src={this.props.student.pic} alt="Student Avatar" />
                <div id="student-container-information">
                    <h1>{this.props.student.firstName.toUpperCase()} {this.props.student.lastName.toUpperCase()}</h1>
                    <div id="student-info">
                        <div>
                            Email: {this.props.student.email} <br />
                            Company: {this.props.student.company} <br />
                            Skill: {this.props.student.skill} <br />
                            Average Grade: {this.calculateAvgGrade(this.props.student)}% <br />
                            {/* Tag Buttons */}
                            <span id="tag-list">
                                {this.props.tags.map(tag => (
                                    <button id="tag-btn" disabled>{tag}</button>
                                ))}
                            </span>
                            {/* Tag input form */}
                            <form>
                                <input
                                    id="addTagInput"
                                    type="text"
                                    placeholder="Add a tag"
                                    value={this.state.value}
                                    onKeyDown={this.addStudentTag} />
                            </form>
                            {/* Part 4: Create expandable list view for test scores. */}
                            <div 
                                id="student-container-grade-detail"
                                style={{display: this.state.displayInfo ? 'block' : 'none'}}>
                                <span id="grades-list">
                                    {this.props.student.grades.map((grade, index) => (
                                        <p key={index}>Test {index+1}: &emsp; {grade}%</p>
                                    ))}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                {/* Conditional Rendering of + or - button depending on state */}
                {/*     
                    Part 4: Buttons Showing either + or - depending on if the 
                    expandable list view is shown or hidden.
                */}
                <div 
                    id="student-container-view-grades-detail"
                    style={{display: this.state.displayInfo ? 'none' : 'block'}}>
                    <button onClick={this.toggleInfoDisplay}>+</button>
                </div>
                <div 
                    id="student-container-view-grades-detail"
                    style={{display: this.state.displayInfo ? 'block' : 'none'}}>
                    <button onClick={this.toggleInfoDisplay}>-</button>
                </div>
            </div>
        );
    }
}

export default Student;