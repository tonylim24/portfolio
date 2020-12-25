@extends('layouts.main')

@push('top-scripts')
    <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}">
@endpush

@section('content')
    <div class="body-container">
        <div class="body-content-container-hero" id="intro">
            <div class="tl-logo">
                <img src="https://i.imgur.com/4uU2FGB.png">
            </div>
            <div class="profile-container">
                <div class="profile-name-description">
                    <h1>Tony Lim</h1><br />
                    <h2>Web / Software Developer</h2>
                    <h3>Grow, Conceptualize, Develop, Exceed. </h3>
                    <br> 
                    <div class="technology-container">
                        <p>Development Technologies (Responsive on window size):</p><br>
            
                        {{-- Show if screen width > 1366px, refer to css. --}}
                        <div class="dev-logos" id="dev-technology-logos-desktop">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/Laravel.png') }}" alt="Laravel" title="Laravel" />
                            <img src="{{ asset('images/logos/ReactJS.png') }}" alt="ReactJS" title="ReactJS" />
                            <img src="{{ asset('images/logos/MySQL.png') }}" alt="MySQL" title="MySQL" />
                            <img src="{{ asset('images/logos/CSS.png') }}" alt="CSS" title="CSS" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/java.png') }}" alt="Java" title="Java" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/python.png') }}" alt="Python" title="Python" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/bootstrap.png') }}" alt="Bootstrap" title="Bootstrap" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/more.png') }}" alt="and More" title="and More" class="img-add-left-padding" />
                        </div>

                        {{-- Show if screen width < 1365px --}}
                        <div class="dev-logos" id="dev-technology-logos-mobile">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/Laravel.png') }}" alt="Laravel" title="Laravel" />
                            <img src="{{ asset('images/logos/ReactJS.png') }}" alt="ReactJS" title="ReactJS" />
                            <img src="{{ asset('images/logos/more.png') }}" alt="and More" title="and More" />
                        </div>
                        <br>
                        <p>Environment: </p><br>
                        {{-- Show if screen width > 1366px, refer to css. --}}
                        <div class="dev-logos" id="dev-environment-logos-desktop">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/windows.png') }}" alt="Microsoft Windows" title="Microsoft Windows" />
                            <img src="{{ asset('images/logos/linux.png') }}" alt="Linux" title="Linux" title="Linux" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/adobecc.png') }}" alt="Adobe Creative Cloud" title="Adobe Creative Cloud" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/git.png') }}" alt="Git" title="Git" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/nodejs.png') }}" alt="Node JS" title="Node JS" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/more.png') }}" alt="and More" title="and More" class="img-add-left-padding-15" />
                        </div>
                        {{-- Show if screen width < 1365px --}}
                        <div class="dev-logos" id="dev-environment-logos-mobile">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/windows.png') }}" alt="Windows" title="Windows" />
                            <img src="{{ asset('images/logos/git.png') }}" alt="Git" title="Git" class="img-add-left-padding" />
                            <img src="{{ asset('images/logos/more.png') }}" alt="and More" title="and More" class="img-add-left-padding-15" />
                        </div>

                    </div>
                    <br>
                </div>
            </div>
            <hr>
        </div>
        
        <div class="subtitle">
            <h4>Resume (Click for full size)</h4><br>
        </div>
        <div class="body-content-container-resume shadow p-3 mb-5 bg-white rounded" id="resume">
            <div class="resume-image">
                <a href="{{asset('images/WEB_RESUME_A4_96PPI.jpg')}}" target="_blank" rel="noreferrer">
                    <img id="resume-image" src="{{ asset('images/WEB_RESUME_A4_96PPI.jpg')}}" alt="resume">
                </a>
            </div>
            <hr>
        </div>

        <div class="subtitle">
            <h4>Work & Projects</h4><br>
        </div>
        <div class="body-content-container-projects" id="projects">

            <div class="content-container-projects-1 shadow p-3 mb-5 bg-white rounded">
                <div class="body-projects-img">
                    <a href="#" target="_blank" rel="noreferrer">
                        <img src="{{asset('/images/datacore-index.jpg')}}" alt="Lee's Electronic's DataCore"> 
                    </a>
                </div>
                <div class="body-projects-desc rounded-xl">
                    <p class="project-title">DataCore</p>
                    <p class="project-text">
                        Business centric web application to assist Lee's Electronic Components in daily operations. 
                        Developed using Laravel, Bootstrap, JQuery, AJAX, PHP, CSS, JS, Bambora API, and SQL.
                    </p><br>
                    <small class="project-disclaimer">Due to customer's and Lee's Electronic's privacy, only screenshots will be provided.</small>
                </div>
            </div>

            <div class="content-container-projects-1 shadow p-3 mb-5 bg-white rounded">
                <div class="body-projects-img">
                    <a href="#" target="_blank" rel="noreferrer">
                        <img src="{{asset('/images/coreui-index.jpg')}}" alt="Lee's Electronic's CoreUI"> 
                    </a>
                </div>
                <div class="body-projects-desc rounded-xl">
                    <p class="project-title">CoreUI</p>
                    <p class="project-text">
                        DataCore's backend system to assist with administration procedures. Database is synced with
                         point of sale system with shell scripts and CSV imports.
                    </p><br>
                    <small class="project-disclaimer">Due to customers' and Lee's Electronic's privacy, only screenshots will be provided.</small>
                </div>
            </div>

            <div class="content-container-projects-1 shadow p-3 mb-5 bg-white rounded">
                <div class="body-projects-img">
                    <a href="https://tonylim-portfolio.herokuapp.com/" target="_blank" rel="noreferrer">
                        <img src="{{asset('/images/portfolio.jpg')}}" alt="Portfolio"> 
                    </a>
                </div>
                <div class="body-projects-desc rounded-xl">
                    <p class="project-title">PERSONAL PORTFOLIO</p>
                    <p class="project-text">
                        Personal portfolio developed locally with MAMP, Nginx, Laravel, CSS, Bootstrap, React, and deployed with Heroku.
                    </p>
                </div>
            </div>

            <div class="content-container-projects-1 shadow p-3 mb-5 bg-white rounded">
                <div class="body-projects-img">
                    <a href="http://www.tngames.ca" target="_blank" rel="noreferrer">
                        <img src="{{asset('/images/tngames.jpg')}}" alt="T&N Games"> 
                    </a>
                </div>
                <div class="body-projects-desc rounded-xl">
                    <p class="project-title">T&N Games</p>
                    <p class="project-text">
                        Modern and simple website developed using HTML, Bootstrap, CSS, and Google APIs. The idea behind 
                        the website is so that it can be maintained without any web development knowledge.
                    </p>
                </div>
            </div>
        </div>
        
    </div>

    <div id="web-footer">
        {{-- React DOM Manipulation: js/components/Footer.js --}}
    </div>
    
@endsection