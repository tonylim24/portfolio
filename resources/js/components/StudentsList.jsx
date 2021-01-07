import React, { Component } from 'react';
import Student from './Student';

class StudentsList extends Component {
    constructor(props) {
        super(props);
        this.state = {
            students: [],
            error: false,
            isLoaded: false,
            searchString: '',
            searchTagString: '',
            studentTags: []
        };

        this.handleSearchChange = this.handleSearchChange.bind(this);
        this.handleSearchByTag = this.handleSearchByTag.bind(this);
        this.addStudentTag = this.addStudentTag.bind(this);
    }

    // Part 1: Fetch data from public JSON API
    // Author: Hartono (Tony) Lim Salim
    componentDidMount() {
        // Fetching API and store result as JSON
        fetch("https://api.hatchways.io/assessment/students")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                isLoaded: true,
                students: result.students,
                studentTags: new Array(result.students.length+1).fill([].fill(null))
                });
            },
            // Catch Errors
            (error) => {
                this.setState({
                isLoaded: true,
                error
                });
            })
    }

    handleSearchChange(event) {
        this.setState({
            searchString: event.target.value.toLowerCase(),
        });
    }

    handleSearchByTag(event) {
        this.setState({
            searchTagString: event.target.value.toLowerCase()
        });
    }

    // Part 5: Adding student tag(s) that correspond to their student ID.
    addStudentTag(studentId, tagValue) {
        let studentTags = this.state.studentTags.slice(0, this.state.studentTags.length);
        let tagsArray = [];

        // Concatenating an array based on new tag added.
        tagsArray = studentTags[studentId];
        const concatenatedStudentTags = tagsArray.concat(tagValue);
        studentTags[studentId] = concatenatedStudentTags;

        this.setState({
            studentTags: studentTags
        });
    }
    
    renderWithSearch() {
        const {error, isLoaded} = this.state;

        // Copy students state for immutability on data change.
        const modifiedStudent = this.state.students.slice(0, this.state.students.length);
        const studentTags = this.state.studentTags.slice(0, this.state.studentTags.length);

        if (error) {
            return <div>Error: {error.message}</div>
        } else if (!isLoaded) {
            return <div>Loading...</div>
        } else {
            // Perform regular search if search by tag is not given.
            if (this.state.searchTagString === ''){
                return (
                    <div>
                        {modifiedStudent
                            .filter(student => 
                                // We can enhance this further by combining the first and last and search that.
                                student.firstName.toLowerCase().includes(this.state.searchString) ||
                                student.lastName.toLowerCase().includes(this.state.searchString)
                            )
                            .map(searchedStudents => (
                                <Student 
                                    student={searchedStudents} 
                                    key={searchedStudents.id}
                                    tags={this.state.studentTags[searchedStudents.id]} 
                                    onAddStudentTag={this.addStudentTag} 
                                />
                            ))
                        }
                    </div>
                );
            }
            // Part 5: Filter search using tag when searchTagString is given.
            // Perform search by name and tag.
            else {
                return (
                    <div>
                        {modifiedStudent
                            .filter(student => 
                                (student.firstName.toLowerCase().includes(this.state.searchString) ||
                                student.lastName.toLowerCase().includes(this.state.searchString)) &&
                                (studentTags[student.id].includes(this.state.searchTagString))
                            )
                            .map(searchedStudents => (
                                <Student 
                                    student={searchedStudents} 
                                    key={searchedStudents.id}
                                    tags={this.state.studentTags[searchedStudents.id]}
                                    onAddStudentTag={this.addStudentTag} 
                                />
                            ))
                        }
                    </div>
                );
            }

        }
    }

    render() {
        return(
            // Part 3 & 5: Adding search by name bar and search by tag bar on top of the page.
            <main>
                {/* Search by Name Form */}
                <form>
                    <input 
                        type="text"
                        id="searchBar" 
                        placeholder="Search by name" 
                        value={this.state.value}
                        onChange={this.handleSearchChange} />
                </form>
                {/* Search by Tag Form */}
                <form>
                    <input 
                        type="text"
                        id="searchBar" 
                        placeholder="Search by tag" 
                        value={this.state.value}
                        onChange={this.handleSearchByTag} />
                </form>
                {this.renderWithSearch(this.state.searchSelectString)}
            </main>
        );
    }
}

export default StudentsList;

if (document.getElementById('hatchways-frontend-assessment')) {
    ReactDOM.render(<StudentsList />, document.getElementById('hatchways-frontend-assessment'));
}