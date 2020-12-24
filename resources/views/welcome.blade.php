@extends('layouts.main')

@push('top-scripts')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
    {{-- <div id="web-header">
        
    </div> --}}

    <div class="body-container">
        <div class="body-content-container-hero">
            <div class="tl-logo">
                <img src="https://i.imgur.com/4uU2FGB.png">
            </div>
            <div class="profile-container">
                <div class="profile-name-description">
                    <h1>Tony Lim</h1><br />
                    <h2>Aspiring to grow in the web and software development industry on a world class level.</h2>
                    <br> 
                    <div class="technology-container">
                        <p>Development Technologies:</p>
                        <br>
                        {{-- Show if screen width > 1200px --}}
                        <div class="dev-technology-logos" id="dev-technology-logos-desktop">
                            {{-- Add technology icons here. --}}
                            <img id="laravel-logo" src="{{ asset('images/logos/Laravel.png') }}" alt="Laravel" title="Laravel" />
                            <img id="react-logo" src="{{ asset('images/logos/ReactJS.png') }}" alt="ReactJS" title="ReactJS" />
                            <img id="mysql-logo" src="{{ asset('images/logos/MySQL.png') }}" alt="MySQL" title="MySQL" />
                            <img id="css-logo" src="{{ asset('images/logos/CSS.png') }}" alt="CSS" title="CSS" class="img-add-left-padding" />
                            <img id="java-logo" src="{{ asset('images/logos/java.png') }}" alt="Java" title="Java" class="img-add-left-padding" />
                            <img id="python-logo" src="{{ asset('images/logos/python.png') }}" alt="Python" title="Python" class="img-add-left-padding" />
                            <img id="bootstrap-logo" src="{{ asset('images/logos/bootstrap.png') }}" alt="Bootstrap" title="Bootstrap" class="img-add-left-padding" />
                        </div>

                        {{-- Show if screen width < 1199px --}}
                        <div class="dev-technology-logos" id="dev-technology-logos-mobile">
                            {{-- Add technology icons here. --}}
                            <img src="{{ asset('images/logos/Laravel.png') }}" alt="Laravel" title="Laravel" />
                            <img src="{{ asset('images/logos/ReactJS.png') }}" alt="ReactJS" title="ReactJS" />
                            <img src="{{ asset('images/logos/MySQL.png') }}" alt="MySQL" title="MySQL" />
                        </div>
                    </div>

                    <br>
                </div>
            </div>
            <hr>
        </div>
        
        <div class="body-content-container-resume" id="resume">
            <div class="resume-title">
                <h3>Resume</h3>
            </div>
            <div class="resume-image">
                <img id="resume-image" src="{{ asset('images/WEB_RESUME_A4_96PPI.jpg')}}" alt="resume">
            </div>
        </div>

    </div>

    <div id="web-footer">
        {{-- React DOM Manipulation: js/components/Footer.js --}}
    </div>
    
@endsection